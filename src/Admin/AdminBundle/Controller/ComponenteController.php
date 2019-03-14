<?php

namespace Admin\AdminBundle\Controller;

use Admin\AdminBundle\Entity\TipoComponente;
use Admin\AdminBundle\Form\TipoComponenteType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class ComponenteController extends Controller
{
    /**
     * @Route("componente", name="componente")
     */
    public function indexAction()
    {
        $componente = $this->getDoctrine()->getRepository('AdminBundle:TipoComponente')
            ->findBy(
                ['stRegistroAtivo' => 'S'],
                ['dsTipoComponente' => 'ASC']
            );
        return $this->render('@Admin/Componente/index.html.twig', ['componente' => $componente]);
    }

    /**
     * @Route("componente/add", name="componente_add")
     */
    public function addAction(Request $request){
        $form = $this->createForm(TipoComponenteType::class);
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
                $this->addFlash("success", "Componente registrado com sucesso!");
            }catch (\Exception $e)            {
                $doctrine->getConnection()->rollBack();
                $this->addFlash("error", "Algum error ocorreu a tentar registrar o Componente");
                throw $e;
            }

            return $this->redirectToRoute('componente');
        }
        return $this->render('@Admin/Componente/add.html.twig', ['form' => $form->createView()]);
    }

    /**
     * @Route("componente/edit/{id}", name="componente_edit")
     */
    public function editAction(TipoComponente $componente, Request $request){
        $form = $this->createForm(TipoComponenteType::class, $componente);
        $form->handleRequest($request);

        if ($form->isValid() && $form->isSubmitted()){

            $postData = $form->getData();
            $postData->setDtAtualizacao(new \DateTime("now", new \DateTimeZone("America/Sao_Paulo")));
            $doctrine = $this->getDoctrine()->getEntityManager();

            $doctrine->persist($postData);
            $doctrine->flush();

            $this->addFlash("success", "Componente editado com sucesso!");
            return $this->redirectToRoute('componente');
        }

        return $this->render('@Admin/Componente/add.html.twig', ['form' => $form->createView()]);
    }

    /**
     * @Route("componente/disable/{id}", name="componente_disable")
     */
    public function disableAction(Request $request, $id = null){

        $em = $this->getDoctrine()->getManager();
        $componente = $em->getRepository(TipoComponente::class)->find($id);

        if(!$componente){
            throw $this->createNotFoundException(
                'O componente selecionado, não foi encontrado!'
            );
        }

        $componente->setStRegistroAtivo('N');
        $componente->setDtAtualizacao(new \DateTime("now", new \DateTimeZone("America/Sao_Paulo")));
        $em->flush();
        $this->addFlash("success", "Componente desativado com sucesso!");

        return $this->redirectToRoute('componente');
    }
}
