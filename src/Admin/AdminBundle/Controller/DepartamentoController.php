<?php

namespace Admin\AdminBundle\Controller;

use Admin\AdminBundle\Entity\Departamento;
use Admin\AdminBundle\Form\DepartamentoType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class DepartamentoController extends Controller
{
    /**
     * @Route("departamento", name="departamento")
     */
    public function indexAction()
    {
        $departamento = $this->getDoctrine()->getRepository('AdminBundle:Departamento')
            ->findBy(
                ['stRegistroAtivo' => 'S'],
                ['dsDepartamento' => 'ASC']
                );
        return $this->render('@Admin/Departamento/index.html.twig', ['departamento' => $departamento]);
    }

    /**
     * @Route("departamento/add", name="departamento_add")
     */
    public function addAction(Request $request){
        $form = $this->createForm(DepartamentoType::class);
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
                $this->addFlash("success", "Departamento registrado com sucesso!");
            }catch (\Exception $e)            {
                $doctrine->getConnection()->rollBack();
                $this->addFlash("error", "Algum error ocorreu a tentar registrar o Departamento");
                throw $e;
            }

            return $this->redirectToRoute('departamento');
        }
        return $this->render('@Admin/Departamento/add.html.twig', ['form' => $form->createView()]);
    }

    /**
     * @Route("departamento/edit/{id}", name="departamento_edit")
     */
    public function editAction(Departamento $departamento, Request $request){
        $form = $this->createForm(DepartamentoType::class, $departamento);
        $form->handleRequest($request);

        if ($form->isValid() && $form->isSubmitted()){

            $postData = $form->getData();
            $postData->setDtAtualizacao(new \DateTime("now", new \DateTimeZone("America/Sao_Paulo")));
            $doctrine = $this->getDoctrine()->getEntityManager();

            $doctrine->persist($postData);
            $doctrine->flush();

            $this->addFlash("success", "Departamento editado com sucesso!");
            return $this->redirectToRoute('departamento');
        }

        return $this->render('@Admin/Departamento/add.html.twig', ['form' => $form->createView()]);
    }

    /**
     * @Route("departamento/disable/{id}", name="departamento_disable")
     */
    public function disableAction(Request $request, $id = null){

        $em = $this->getDoctrine()->getManager();
        $departamento = $em->getRepository(Departamento::class)->find($id);

        if(!$departamento){
            throw $this->createNotFoundException(
                'O departamento selecionado, não foi encontrado!'
            );
        }

        $departamento->setStRegistroAtivo('N');
        $departamento->setDtAtualizacao(new \DateTime("now", new \DateTimeZone("America/Sao_Paulo")));
        $em->flush();
        $this->addFlash("success", "Departamento desativado com sucesso!");

        return $this->redirectToRoute('departamento');
    }
}
