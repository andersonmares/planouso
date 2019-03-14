<?php

namespace Admin\AdminBundle\Controller;

use Admin\AdminBundle\Entity\TipoAtividade;
use Admin\AdminBundle\Form\TipoAtividadeType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class TipoAtividadeController extends Controller
{
    /**
     * @Route("tipoatividade", name="tipoatividade")
     */
    public function indexAction()
    {
        $atividade = $this->getDoctrine()->getRepository('AdminBundle:TipoAtividade')
            ->findBy(
                ['stRegistroAtivo' => 'S'],
                ['dsTipoAtividade' => 'ASC']
            );
        return $this->render('@Admin/TipoAtividade/index.html.twig', ['atividade' => $atividade]);
    }

    /**
     * @Route("tipoatividade/add", name="tipoatividade_add")
     */
    public function addAction(Request $request){
        $form = $this->createForm(TipoAtividadeType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){

            $postData = $form->getData();
            $postData->setDtCadastro(new \DateTime("now", new \DateTimeZone("America/Sao_Paulo")));
            $postData->setDtAtualizacao(new \DateTime("now", new \DateTimeZone("America/Sao_Paulo")));
            $postData->setStRegistroAtivo('S');
            $doctrine = $this->getDoctrine()->getEntityManager();
            $doctrine->getConnection()->beginTransaction();

            try{
                $doctrine->persist($postData);
                $doctrine->flush();
                $doctrine->getConnection()->commit();
                $this->addFlash("success", "Tipo de Atividade registrado com sucesso!");
            }catch (\Exception $e)            {
                $doctrine->getConnection()->rollBack();
                $this->addFlash("error", "Algum error ocorreu a tentar registrar o Tipo Atividade");
                throw $e;
            }

            return $this->redirectToRoute('componente');
        }
        return $this->render('@Admin/TipoAtividade/add.html.twig', ['form' => $form->createView()]);
    }

    /**
     * @Route("tipoatividade/edit/{id}", name="tipoatividade_edit")
     */
    public function editAction(TipoAtividade $componente, Request $request){
        $form = $this->createForm(TipoAtividadeType::class, $componente);
        $form->handleRequest($request);

        if ($form->isValid() && $form->isSubmitted()){

            $postData = $form->getData();
            $postData->setDtAtualizacao(new \DateTime("now", new \DateTimeZone("America/Sao_Paulo")));
            $doctrine = $this->getDoctrine()->getEntityManager();

            $doctrine->persist($postData);
            $doctrine->flush();

            $this->addFlash("success", "Tipo de Atividade editado com sucesso!");
            return $this->redirectToRoute('atividade');
        }

        return $this->render('@Admin/TipoAtividade/add.html.twig', ['form' => $form->createView()]);
    }

    /**
     * @Route("tipoatividade/disable/{id}", name="tipoatividade_disable")
     */
    public function disableAction(Request $request, $id = null){

        $em = $this->getDoctrine()->getManager();
        $atividade = $em->getRepository(TipoAtividade::class)->find($id);

        if(!$atividade){
            throw $this->createNotFoundException(
                'A Atividade selecionada, não foi encontrada!'
            );
        }

        $atividade->setStRegistroAtivo('N');
        $atividade->setDtAtualizacao(new \DateTime("now", new \DateTimeZone("America/Sao_Paulo")));
        $em->flush();
        $this->addFlash("success", "Tipo de Atividade desativado com sucesso!");

        return $this->redirectToRoute('tipoatividade');
    }
}
