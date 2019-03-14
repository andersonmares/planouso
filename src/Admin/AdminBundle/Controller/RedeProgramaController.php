<?php

namespace Admin\AdminBundle\Controller;

use Admin\AdminBundle\Entity\Departamento;
use Admin\AdminBundle\Entity\RedePrograma;
use Admin\AdminBundle\Form\RedeProgramaType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class RedeProgramaController extends Controller
{
    /**
     * @Route("redeprograma", name="redeprograma")
     */
    public function indexAction()
    {

        $redeprograma = $this->getDoctrine()->getRepository(RedePrograma::class)->listaRedePrograma();

        return $this->render('@Admin/RedePrograma/index.html.twig', ['redeprograma' => $redeprograma]);
    }

    /**
     * @Route("redeprograma/add", name="redeprograma_add")
     */
    public function addAction(Request $request){
        $form = $this->createForm(RedeProgramaType::class);
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
                $this->addFlash("success", "Rede de Programa registrado com sucesso!");
            }catch (\Exception $e)            {
                $doctrine->getConnection()->rollBack();
                $this->addFlash("error", "Algum error ocorreu a tentar registrar a Rede de Programa");
                throw $e;
            }

            return $this->redirectToRoute('redeprograma');
        }
        return $this->render('@Admin/RedePrograma/add.html.twig', ['form' => $form->createView()]);
    }

    /**
     * @Route("redeprograma/edit/{id}", name="redeprograma_edit")
     */
    public function editAction(RedePrograma $redeprograma, Request $request){
        $form = $this->createForm(RedeProgramaType::class, $redeprograma);
        $form->handleRequest($request);

        if ($form->isValid() && $form->isSubmitted()){

            $postData = $form->getData();
            $postData->setDtAtualizacao(new \DateTime("now", new \DateTimeZone("America/Sao_Paulo")));
            $doctrine = $this->getDoctrine()->getEntityManager();

            $doctrine->persist($postData);
            $doctrine->flush();

            $this->addFlash("success", "Rede de Pograma editado com sucesso!");
            return $this->redirectToRoute('redeprograma');
        }

        return $this->render('@Admin/RedePrograma/add.html.twig', ['form' => $form->createView()]);
    }

    /**
     * @Route("redeprograma/disable/{id}", name="redeprograma_disable")
     */
    public function disableAction(Request $request, $id = null){

        $em = $this->getDoctrine()->getManager();
        $redeprograma = $em->getRepository(RedePrograma::class)->find($id);

        if(!$redeprograma){
            throw $this->createNotFoundException(
                'A Rede de Programa selecionada, não foi encontrada!'
            );
        }

        $redeprograma->setStRegistroAtivo('N');
        $redeprograma->setDtAtualizacao(new \DateTime("now", new \DateTimeZone("America/Sao_Paulo")));
        $em->flush();
        $this->addFlash("success", "Rede de Programa desativado com sucesso!");

        return $this->redirectToRoute('redeprograma');
    }
}
