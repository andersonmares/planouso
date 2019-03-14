<?php

namespace Admin\AdminBundle\Controller;

use Admin\AdminBundle\Entity\Despesa;
use Admin\AdminBundle\Entity\TipoDespesa;
use Admin\AdminBundle\Form\DespesaType;
use Admin\AdminBundle\Form\TipoDespesaType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class DespesaController extends Controller
{
    /**
     * @Route("despesa", name="despesa")
     */
    public function indexAction()
    {
        $despesa = $this->getDoctrine()->getRepository('AdminBundle:TipoDespesa')
            ->findBy(
                ['stRegistroAtivo' => 'S'],
                ['dsTipoDespesa' => 'ASC']
            );
        return $this->render('@Admin/Despesa/index.html.twig', ['despesa' => $despesa]);

    }

    /**
     * @Route("despesa/add", name="despesa_add")
     */
    public function addAction(Request $request){
        $form = $this->createForm(TipoDespesaType::class);
        $form->handleRequest($request);

        if ($form->isValid() && $form->isSubmitted()){

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
                $this->addFlash("success", "Despesa registrada com sucesso!");
            }catch (\Exception $e)            {
                $doctrine->getConnection()->rollBack();
                $this->addFlash("error", "Algum error ocorreu a tentar registrar a Despesa");
                throw $e;
            }

            return $this->redirectToRoute('despesa');
        }
        return $this->render('@Admin/Despesa/add.html.twig', ['form' => $form->createView()]);
    }

    /**
     * @Route("despesa/edit/{id}", name="despesa_edit")
     */
    public function editAction(TipoDespesa $despesa, Request $request){
        $form = $this->createForm(TipoDespesaType::class, $despesa);
        $form->handleRequest($request);

        if ($form->isValid() && $form->isSubmitted()){

            $postData = $form->getData();
            $postData->setDtAtualizacao(new \DateTime("now", new \DateTimeZone("America/Sao_Paulo")));
            $doctrine = $this->getDoctrine()->getEntityManager();

            $doctrine->persist($postData);
            $doctrine->flush();

            $this->addFlash("success", "Despesa editada com sucesso!");
            return $this->redirectToRoute('despesa');
        }

        return $this->render('@Admin/Despesa/add.html.twig', ['form' => $form->createView()]);
    }

    /**
     * @Route("despesa/disable/{id}", name="despesa_disable")
     */
    public function disableAction(Request $request, $id = null){

        $em = $this->getDoctrine()->getManager();
        $despesa = $em->getRepository(Despesa::class)->find($id);

        if(!$despesa){
            throw $this->createNotFoundException(
                'A despesa selecionada, não foi encontrada!'
            );
        }

        $despesa->setStRegistroAtivo('N');
        $despesa->setDtAtualizacao(new \DateTime("now", new \DateTimeZone("America/Sao_Paulo")));
        $em->flush();
        $this->addFlash("success", "Despesa desativada com sucesso!");

        return $this->redirectToRoute('despesa');
    }


}
