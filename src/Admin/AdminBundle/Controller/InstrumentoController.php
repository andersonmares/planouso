<?php

namespace Admin\AdminBundle\Controller;

use Admin\AdminBundle\Entity\TipoInstrumento;
use Admin\AdminBundle\Form\TipoInstrumentoType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class InstrumentoController extends Controller
{
    /**
     * @Route("instrumento", name="instrumento")
     */
    public function indexAction()
    {

        $instrumento = $this->getDoctrine()->getRepository('AdminBundle:TipoInstrumento')
            ->findBy(
                ['stRegistroAtivo' => 'S'],
                ['dsTipoInstrumento' => 'ASC']
            );

        return $this->render('@Admin/Instrumento/index.html.twig', ['instrumento' => $instrumento]);
    }


    /**
     * @Route("instrumento/add", name="instrumento_add")
     */
    public function addAction(Request $request){
        $form = $this->createForm(TipoInstrumentoType::class);
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
                $this->addFlash("success", "Instrumento registrado com sucesso!");
            }catch (\Exception $e)            {
                $doctrine->getConnection()->rollBack();
                $this->addFlash("error", "Algum error ocorreu a tentar registrar o Instrumento");
                throw $e;
            }

            return $this->redirectToRoute('instrumento');
        }
        return $this->render('@Admin/Instrumento/add.html.twig', ['form' => $form->createView()]);
    }

    /**
     * @Route("instrumento/edit/{id}", name="instrumento_edit")
     */
    public function editAction(TipoInstrumento $instrumento, Request $request){
        $form = $this->createForm(TipoInstrumentoType::class, $instrumento);
        $form->handleRequest($request);

        if ($form->isValid() && $form->isSubmitted()){

            $postData = $form->getData();
            $postData->setDtAtualizacao(new \DateTime("now", new \DateTimeZone("America/Sao_Paulo")));
            $doctrine = $this->getDoctrine()->getEntityManager();

            $doctrine->persist($postData);
            $doctrine->flush();

            $this->addFlash("success", "Instrumento editado com sucesso!");
            return $this->redirectToRoute('instrumento');
        }

        return $this->render('@Admin/Instrumento/add.html.twig', ['form' => $form->createView()]);
    }

    /**
     * @Route("instrumento/disable/{id}", name="instrumento_disable")
     */
    public function disableAction(Request $request, $id = null){

        $em = $this->getDoctrine()->getManager();
        $instrumento = $em->getRepository(TipoInstrumento::class)->find($id);

        if(!$instrumento){
            throw $this->createNotFoundException(
                'O instrumento selecionado, não foi encontrado!'
            );
        }

        $instrumento->setStRegistroAtivo('N');
        $instrumento->setDtAtualizacao(new \DateTime("now", new \DateTimeZone("America/Sao_Paulo")));
        $em->flush();
        $this->addFlash("success", "Instrumento desativado com sucesso!");

        return $this->redirectToRoute('instrumento');
    }
}
