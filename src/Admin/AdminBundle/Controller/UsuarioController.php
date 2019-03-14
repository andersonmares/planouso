<?php

namespace Admin\AdminBundle\Controller;

use Admin\AdminBundle\Entity\AuxUsuarioPessoaFisica;
use Admin\AdminBundle\Entity\Departamento;
use Admin\AdminBundle\Entity\PerfilAcesso;
use Admin\AdminBundle\Entity\PessoaFisica;
use Admin\AdminBundle\Entity\Usuario;
use Admin\AdminBundle\Entity\UsuarioPessoaFisica;
use Admin\AdminBundle\Form\AuxUsuarioPessoaFisicaType;
use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class UsuarioController extends Controller
{
    /**
     * @Route("usuario", name="usuario")
     */
    public function indexAction(Request $request)
    {
        return $this->render('@Admin/Usuario/index.html.twig');

    }

    /**
     * @Route("usuario/add/{cpf}", name="usuario_add", options={ "expose" = true })
     */
    public function addAction(Request $request, $cpf)
    {

        $pessoaFisica = $this->getDoctrine()->getRepository(PessoaFisica::class)->buscaCPF($cpf);


        if ($pessoaFisica) {
            $form = $this->createForm(AuxUsuarioPessoaFisicaType::class, null);

            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {

                $em = $this->getDoctrine()->getEntityManager();
                $data = $request->request->all('usuario');

                $user = new User();
                $passwordRandom = $this->generateRandomString();
                $passwordEncoder = $this->get('security.password_encoder');
                $password = $passwordEncoder->encodePassword($user, $passwordRandom);
                $perfilAcesso = $this->getDoctrine()->getRepository(PerfilAcesso::class)->find($data['usuario']['coPerfilAcesso']);
                $departamento = $this->getDoctrine()->getRepository(Departamento::class)->find($data['usuario']['coDepartamento']);
                $em->getConnection()->beginTransaction();
                try {
                    $usuario = new Usuario();

                    $usuario->setDsUsuario($pessoaFisica['cpf']);
                    $usuario->setDsSenha($password);
                    $usuario->setDsPapel($perfilAcesso->getDsPapel());
                    $usuario->setPerfil($perfilAcesso);
                    $usuario->setStRegistroAtivo('S');
                    if ($data['usuario']['coPerfilAcesso'] == 3) {//Se o perfil for Departamento
                        $usuario->setDepartamento($departamento);
                    } else {
                        $usuario->setDepartamento($departamento);
                    }
                    $usuario->setDtCadastro(new \DateTime("now", new \DateTimeZone("America/Sao_Paulo")));
                    $usuario->setDtAtualizacao(new \DateTime("now", new \DateTimeZone("America/Sao_Paulo")));

                    $em->persist($usuario);

                    $usuarioPessoaFisica = new UsuarioPessoaFisica();

                    $usuarioPessoaFisica->setUsuario($usuario);
                    $usuarioPessoaFisica->setNuCpf($pessoaFisica['cpf']);
                    $usuarioPessoaFisica->setNoPessoaFisica($pessoaFisica['noPessoa']);
                    $usuarioPessoaFisica->setDsEmail($data['usuario']['dsEmail']);
                    $telefoneAux = trim(preg_replace('/[^a-zA-Z0-9\']/', '', $data['usuario']['nuTelefone']));
                    $usuarioPessoaFisica->setNuDdd(substr($telefoneAux, 0, 2));
                    $usuarioPessoaFisica->setNuTelefone(substr($telefoneAux, 2));
                    $usuarioPessoaFisica->setDtCadastro(new \DateTime("now", new \DateTimeZone("America/Sao_Paulo")));
                    $usuarioPessoaFisica->setDtAtualizacao(new \DateTime("now", new \DateTimeZone("America/Sao_Paulo")));
                    $usuarioPessoaFisica->setStRegistroAtivo('S');

                    $em->persist($usuarioPessoaFisica);

                    $em->flush();

                    $em->getConnection()->commit();

                    $mailer = $this->get('swiftmailer.mailer');

                    $message = (new \Swift_Message('Plano de Ação Orçamentária - Acesso'))
                        ->setFrom($this->getParameter('mailer_from'))
                        ->setTo($data['usuario']['dsEmail'])
                        ->addPart(
                            $this->renderView(
                                '@Admin/Usuario/email.registration.html.twig',
                                array(
                                        'nomePessoa' => $pessoaFisica['noPessoa'],
                                        'cpf' => $pessoaFisica['cpf'],
                                        'passowrd' => $passwordRandom
                                )
                            ),
                            'text/html'
                        )
                    ;

                    $mailer->send($message);

                    $this->addFlash("success", "Usuário criado com sucesso, um e-mail foi disparado para " .$data['usuario']['dsEmail']. " com as informações de acesso." );
                    return $this->redirectToRoute('usuario');

                }catch (Exception $e){
                    $em->getConnection()->rollBack();
                    $this->addFlash("error", "Ocorreu um erro no sistema ao tentar cadastrar o usuário." );
                    return $this->redirectToRoute('usuario');
                    throw $e;
                }

            }

            return $this->render('@Admin/Usuario/add.html.twig', [
                'title_page' => 'Usuários',
                'icon' => 'users',
                'pessoa_fisica' => $pessoaFisica,
                'displayDepartamento' => 'none',
                'form' => $form->createView()
            ]);

        } else {
            $this->addFlash("error", "O CPF informado não foi localizado");
            return $this->redirectToRoute('usuario');
        }
    }

    /**
     * @Route("usuario/edit/{id}", name="usuario_edit", options={ "expose" = true })
     */
    public function editAction(Request $request, $id) {

        $usuario = $this->getDoctrine()->getRepository(Usuario::class)->find($id);

        if ($usuario) {
            $usuarioPessoaFisica = $this->getDoctrine()->getRepository(UsuarioPessoaFisica::class)->findOneBy(
                array('coUsuario' => $usuario->getId(), 'stRegistroAtivo' => 'S')
            );
            $pessoaFisica = $this->getDoctrine()->getRepository(PessoaFisica::class)->buscaCPF($usuarioPessoaFisica->getNuCpf());

            $auxUsuaioPessoaFisica = new AuxUsuarioPessoaFisica();
            $auxUsuaioPessoaFisica->setNoPessoaFisica($usuarioPessoaFisica->getNoPessoaFisica());
            $auxUsuaioPessoaFisica->setDsEmail($usuarioPessoaFisica->getDsEmail());
            $auxUsuaioPessoaFisica->setNuTelefone($usuarioPessoaFisica->getNuDdd() . $usuarioPessoaFisica->getNuTelefone());

            $auxUsuaioPessoaFisica->setCoPerfilAcesso($usuario->getPerfil());
            $auxUsuaioPessoaFisica->setCoDepartamento($usuario->getDepartamento());

            $form = $this->createForm(AuxUsuarioPessoaFisicaType::class, $auxUsuaioPessoaFisica);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $em = $this->getDoctrine()->getEntityManager();
                $data = $request->request->all('usuario');
                $perfilAcesso = $this->getDoctrine()->getRepository(PerfilAcesso::class)->find($data['usuario']['coPerfilAcesso']);

                $em->getConnection()->beginTransaction();
                try {
                    $usuario->setCoPerfilAcesso($data['usuario']['coPerfilAcesso']);
                    $usuario->setDsPapel($perfilAcesso->getDsPapel());
                    if ($data['usuario']['coPerfilAcesso'] == 3) {//Se o perfil for Departamento
                        $usuario->setCoDepartamento($data['usuario']['coDepartamento']);
                    } else {
                        $usuario->setCoDepartamento(null);
                    }

                    $usuario->setDtAtualizacao(new \DateTime("now", new \DateTimeZone("America/Sao_Paulo")));
                    $em->persist($usuario);

                    $usuarioPessoaFisica->setDsEmail($data['usuario']['dsEmail']);
                    $telefoneAux = trim(preg_replace('/[^a-zA-Z0-9\']/', '', $data['usuario']['nuTelefone']));
                    $usuarioPessoaFisica->setNuDdd(substr($telefoneAux, 0, 2));
                    $usuarioPessoaFisica->setNuTelefone(substr($telefoneAux, 2));
                    $usuarioPessoaFisica->setDtAtualizacao(new \DateTime("now", new \DateTimeZone("America/Sao_Paulo")));

                    $em->persist($usuarioPessoaFisica);

                    $em->flush();

                    $em->getConnection()->commit();

                    $this->addFlash("success", "Usuário atualizado com sucesso." );

                }catch (Exception $e){
                    $em->getConnection()->rollBack();
                    $this->addFlash("error", "Ocorreu um erro no sistema ao tentar cadastrar o usuário." );
                    throw $e;
                }

            }
            return $this->render('@Admin/Usuario/add.html.twig', [
                'pessoa_fisica' => $pessoaFisica,
                'displayDepartamento' => ($usuario->getCoPerfilAcesso() == 3) ? 'block' : 'none',
                'form' => $form->createView()
            ]);
        }else{
            $this->addFlash("error", "O usuário não foi localizado");
            return $this->redirectToRoute('usuario');
        }
    }

    /**
     * @Route("usuario/disable/{id}", name="usuario_disable")
     */
    public function disableAction(Request $request, $id = null)
    {
        $em = $this->getDoctrine()->getManager();
        $usuario = $em->getRepository(Usuario::class)->find($id);
        if(!$usuario){
            throw $this->createNotFoundException(
                'O Usuário informado não foi localizado!'
            );
        }

        $usuario->setStRegistroAtivo('N');
        $usuario->setDtAtualizacao(new \DateTime("now", new \DateTimeZone("America/Sao_Paulo")));
        $em->flush();
        $this->addFlash("success", "Usuário desativado com sucesso!");

        return $this->redirectToRoute('usuario');
    }

    /**
     * @Route("usuario/jsonlistausuario", name="json_lista_usuario", options={ "expose" = true })
     * @return JsonResponse
     */
    public function jsonlistausuarioAction()
    {
        $usuario = $this->getDoctrine()->getRepository(Usuario::class)
            ->listaUsuario();

        $json = array();

        foreach ($usuario as $u) {
            $json[] = [
                $u['id'],
                $u['nuCpf'],
                $u['noPessoaFisica'],
                $u['dsPerfilAcesso'],
                $u['dsDepartamento'],
                ($u['dtCadastro'] != null) ? $u['dtCadastro']->format("d/m/Y H:i:s") : null,
                ($u['dtAtualizacao'] != null) ? $u['dtAtualizacao']->format("d/m/Y H:i:s") : null,
            ];
        }

        return new JsonResponse(
            array(
                'data' => $json
            )
        );
    }

    /**
     * @Route("usuario/jsonlocalizacpf", name="json_localiza_cpf", options={ "expose" = true })
     * @return JsonResponse
     */
    public function jsonlocalizacpfAction($cpf)
    {

        /**
         * busca na base da receita o CPF informado e cruza com a tabela de usuário cadastrado
         */
        $pessoaFisica = $this->getDoctrine()->getRepository(PessoaFisica::class)->buscaCPF($cpf);

        $pessoa = ($pessoaFisica) ? $pessoaFisica : null;

        $json = array();
        if ($pessoa) {
            $json[] = [
                $pessoa['id'],
                $pessoa['cpf'],
                $pessoa['noPessoa'],
                $pessoa['dsPerfilAcesso'],
                $pessoa['dsDepartamento'],
                ($pessoa['dtCadastro'] != null) ? $pessoa['dtCadastro']->format("d/m/Y H:i:s") : null,
                ($pessoa['dtAtualizacao'] != null) ? $pessoa['dtAtualizacao']->format("d/m/Y H:i:s") : null,
            ];
        }

        return new JsonResponse(
            array(
                'data' => $json
            )
        );

    }

    function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

}
