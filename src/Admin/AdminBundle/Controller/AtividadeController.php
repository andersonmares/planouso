<?php

namespace Admin\AdminBundle\Controller;

use Admin\AdminBundle\Entity\Atividade;
use Admin\AdminBundle\Form\AtividadeType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class AtividadeController extends Controller
{
    /**
     * @Route("atividade", name="atividade")
     */
    public function indexAction()
    {
        $atividade = $this->getDoctrine()->getRepository('AdminBundle:Atividade')
            ->findBy(
                ['stRegistroAtivo' => 'S'],
                ['dsAtividade' => 'ASC']
            );
        return $this->render('@Admin/Atividade/index.html.twig', ['atividade' => $atividade]);
    }

    /**
     * @Route("atividade/add", name="atividade_add")
     */
    public function addAction(Request $request){
        $form = $this->createForm(AtividadeType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){

            $postData = $form->getData();
            $postData->setDtCadastro(new \DateTime("now", new \DateTimeZone("America/Sao_Paulo")));
            $postData->setDtAtualizacao(new \DateTime("now", new \DateTimeZone("America/Sao_Paulo")));
            $postData->setStRegistroAtivo('S');
            $doctrine = $this->getDoctrine()->getManager();
            $doctrine->getConnection()->beginTransaction();

            try{
                $doctrine->persist($postData);
                $doctrine->flush();
                $doctrine->getConnection()->commit();
                $this->addFlash("success", "Atividade registrada com sucesso!");
            }catch (\Exception $e)            {
                $doctrine->getConnection()->rollBack();
                $this->addFlash("error", "Algum error ocorreu a tentar registrar a Atividade");
                throw $e;
            }

            return $this->redirectToRoute('atividade');
        }
        return $this->render('@Admin/Atividade/add.html.twig', ['form' => $form->createView()]);
    }

    /**
     * @Route("atividade/edit/{id}", name="atividade_edit")
     */
    public function editAction(Atividade $componente, Request $request){
        $form = $this->createForm(AtividadeType::class, $componente);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){

            $postData = $form->getData();
            $postData->setDtAtualizacao(new \DateTime("now", new \DateTimeZone("America/Sao_Paulo")));
            $doctrine = $this->getDoctrine()->getManager();

            $doctrine->persist($postData);
            $doctrine->flush();

            $this->addFlash("success", "Atividade editada com sucesso!");
            return $this->redirectToRoute('atividade');
        }

        return $this->render('@Admin/Atividade/add.html.twig', ['form' => $form->createView()]);
    }

    /**
     * @Route("atividade/disable/{id}", name="atividade_disable")
     */
    public function disableAction(Request $request, $id = null){

        $em = $this->getDoctrine()->getManager();
        $atividade = $em->getRepository(Atividade::class)->find($id);

        if(!$atividade){
            throw $this->createNotFoundException(
                'A Atividade selecionada, não foi encontrada!'
            );
        }

        $atividade->setStRegistroAtivo('N');
        $atividade->setDtAtualizacao(new \DateTime("now", new \DateTimeZone("America/Sao_Paulo")));
        $em->flush();
        $this->addFlash("success", "Atividade desativada com sucesso!");

        return $this->redirectToRoute('atividade');
    }
}
