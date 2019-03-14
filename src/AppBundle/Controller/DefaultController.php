<?php

namespace AppBundle\Controller;

use Admin\AdminBundle\Entity\Usuario;
use Admin\AdminBundle\Entity\UsuarioRecuperaSenha;
use AppBundle\Entity\User;
use AppBundle\Form\ChangePasswordType;
use AppBundle\Form\ForgotPasswordType;
use AppBundle\Form\Model\ChangePassword;
use AppBundle\Form\Model\RecoverPassword;
use AppBundle\Form\RecoverPasswordType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="index")
     */
    public function indexAction(Request $request)
    {
        $authUtils = $this->get('security.authentication_utils');
        $error = $authUtils->getLastAuthenticationError();
        $lastUsername = $authUtils->getLastUsername();
        $formForgot = $this->createForm(ForgotPasswordType::class);

        return $this->render('default/login.html.twig', array(
            'last_username' => $lastUsername,
            'error'         => $error,
            'formForgot' => $formForgot->createView()
        ));
    }

    /**
     * @Route("/perfil", name="perfil")
     */
    public function perfilAction(Request $request)
    {
        return $this->render('default/index.html.twig');
    }

    /**
     * @Route("/changepasswd", name="changepasswd")
     */
    public function changePasswdAction(Request $request)
    {
        $changePasswordModel = new ChangePassword();
        $form = $this->createForm(ChangePasswordType::class, $changePasswordModel);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $postdata = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $user = $em->getRepository(User::class)->find($this->getUser()->getId());
            $passwordEncoder = $this->get('security.password_encoder');
            $newPassword = $passwordEncoder->encodePassword($user, $postdata->getNewPassword());
            $user->setPassword($newPassword);
            $user->setUpdateAt(new \DateTime("now", new \DateTimeZone("America/Sao_Paulo")));

            $em->getConnection()->beginTransaction();
            try{
                $em->persist($user);
                $em->flush();
                $em->getConnection()->commit();
                $this->addFlash("success", "Senha alterada com sucesso!");
                //return $this->redirect($this->generateUrl('change_passwd_success'));

            }catch (\Exception $e){
                $em->getConnection()->rollBack();
                $this->addFlash("error", "Ocorreu algum erro ao tentar atualizar a senha");
                throw $e;
            }
        }

        return $this->render('default/changePasswd.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("changepasswd/success", name="changepasswd_success")
     */
    public function changePasswdSucessAction(Request $request){
        return $this->render('default/changePasswdSuccess.html.twig');
    }

    /**
     * @Route("error/{error}", name="error")
     */
    public function errorAction(Request $request, $error){
        return $this->render('default/error.html.twig', ['error' => $error]);
    }

    /**
     * @Route("/forgot", name="forgot")
     */
    public function forgotAction(Request $request){

        if ($request->getMethod() == 'POST') {
            $formForgot = $this->createForm(ForgotPasswordType::class);
            $formForgot->handleRequest($request);
            if ($formForgot->isSubmitted()) {
                if ($formForgot->isValid()) {
                    $data = $formForgot->getData();
                    $usuario = $this->getDoctrine()->getRepository(Usuario::class)->encontrarUsuario($data["user"]);
                    if ($usuario) {
                        $ultimoToken = $this->getDoctrine()->getRepository(UsuarioRecuperaSenha::class)->ultimoToken($usuario['id']);
                        if (!isset($ultimoToken[0])) {
                            $token = $this->generateToken();
                            $em = $this->getDoctrine()->getManager();
                            $usuarioRecuperaSenha = new UsuarioRecuperaSenha();
                            $usuarioRecuperaSenha->setCoUsuario($usuario['id']);
                            $usuarioRecuperaSenha->setDsToken($token);
                            $dateNow = new \DateTime("now", new \DateTimeZone("America/Sao_Paulo"));
                            $usuarioRecuperaSenha->setDtCadastro($dateNow);
                            $usuarioRecuperaSenha->setDtVencimento($dateNow->add(new \DateInterval("PT5H")));//adiciona 5 horas para definir o prazo de vencimento
                            $em->persist($usuarioRecuperaSenha);
                            $em->flush();
                            $this->sendEmailForget($usuario["nuCpf"], $usuario["dsEmail"], $token);
                            $response = new JsonResponse(['msg' => "Uma mensagem para recuperação da senha foi enviada para o seu e-mail."], 200);
                        }else{
                            $usuarioRecuperaSenha = $this->getDoctrine()->getRepository(UsuarioRecuperaSenha::class)->find($ultimoToken[0]->getId());
                            $dateNow = new \DateTime("now", new \DateTimeZone("America/Sao_Paulo"));
                            $usuarioRecuperaSenha->setDtVencimento($dateNow->add(new \DateInterval("PT5H")));//adiciona 5 horas para definir o prazo de vencimento
                            $em = $this->getDoctrine()->getManager();
                            $em->persist($usuarioRecuperaSenha);
                            $em->flush();
                            $this->sendEmailForget($usuario["nuCpf"], $usuario["dsEmail"], $ultimoToken[0]->getDsToken());
                            $response = new JsonResponse(['msg' => "Uma mensagem para recuperação da senha foi reenviada para o seu e-mail"], 200);
                        }


                    } else {
                        $response = new JsonResponse(['msg' => "O usuário não foi localizado."], 403);
                    }
                }else{
                    $response = new JsonResponse(['msg' => "Formulário inválido!."], 403);
                }
            } else {
                $response = new JsonResponse(['msg' => "Formulário inválido!."], 403);
            }
        }else{
            $response = new JsonResponse(['msg' => "Requisição inválida."], 403);
        }
        return $response;
    }

    /**
     * @Route("/recoverpassword/{usuario}/{token}", name="recoverpassword")
     */
    public function recoverpasswordAction(Request $request, $usuario, $token){

        $usuarioEntity = $this->getDoctrine()->getRepository(Usuario::class)->findOneBy(['dsUsuario' => base64_decode($usuario), 'stRegistroAtivo' => 'S']);
        if ($usuarioEntity){
            $ultimoToken = $this->getDoctrine()->getRepository(UsuarioRecuperaSenha::class)->ultimoToken($usuarioEntity->getId());
            if (isset($ultimoToken[0])) {
                if ($token == $ultimoToken[0]->getDsToken()){

                    $recoverPasswordModel = new RecoverPassword();
                    $form = $this->createForm(RecoverPasswordType::class, $recoverPasswordModel);
                    $form->handleRequest($request);

                    if ($form->isSubmitted() && $form->isValid()) {
                        $postdata = $form->getData();
                        $em = $this->getDoctrine()->getManager();
                        $user = $em->getRepository(User::class)->find($usuarioEntity->getId());
                        $passwordEncoder = $this->get('security.password_encoder');
                        $newPassword = $passwordEncoder->encodePassword($user, $postdata->getNewPassword());
                        $user->setPassword($newPassword);
                        $user->setUpdateAt(new \DateTime("now", new \DateTimeZone("America/Sao_Paulo")));

                        $usuarioRecuperaSenha = $em->getRepository(UsuarioRecuperaSenha::class)->find($ultimoToken[0]->getId());
                        $usuarioRecuperaSenha->setStSenhaAlterada('S');

                        $em->getConnection()->beginTransaction();
                        try{
                            $em->persist($user);
                            $em->persist($usuarioRecuperaSenha);
                            $em->flush();
                            $em->getConnection()->commit();
                            $this->addFlash("success", "Senha alterada com sucesso!");
                            return $this->redirect($this->generateUrl('index'));

                        }catch (\Exception $e){
                            $em->getConnection()->rollBack();
                            $this->addFlash("error", "Ocorreu algum erro ao tentar atualizar a senha");
                            return $this->redirect($this->generateUrl('index'));
                        }
                    }

                    return $this->render('default/recoverPassword.html.twig', array(
                        'form' => $form->createView(),
                    ));

                }else{

                    $this->addFlash("error", "Solicitação inválida");
                    return $this->redirect($this->generateUrl('index'));
                }
            }else{
                $this->addFlash("error", "A solicitação não existe ou expirou!");
                return $this->redirect($this->generateUrl('index'));

            }

        }else{
            $this->addFlash("error", "O usuário não existe!");
            return $this->redirect($this->generateUrl('index'));
        }
    }


    private function generateToken() {
        return rtrim(strtr(base64_encode(random_bytes(32)), '+/', '-_'), '=');
    }

    private function sendEmailForget($usuario, $email, $token){
        $mailer = $this->get('swiftmailer.mailer');
        $message = (new \Swift_Message('Plano de Ação Orçamentária - Recuperar sua senha'))
            ->setFrom($this->getParameter('mailer_from'))
            ->setTo($email)
            ->addPart(
                $this->renderView(
                    'default/email.forgot.html.twig',
                    array(
                        'url' => $this->generateUrl('recoverpassword', array('usuario' =>  base64_encode($usuario), 'token' => $token), UrlGeneratorInterface::ABSOLUTE_URL),

                    )
                ),
                'text/html'
            )
        ;
        return $mailer->send($message);
    }

}
