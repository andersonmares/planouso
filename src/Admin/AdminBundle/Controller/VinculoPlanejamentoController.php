<?php

namespace Admin\AdminBundle\Controller;

use Admin\AdminBundle\Entity\VinculoPlanejamento;
use Admin\AdminBundle\Form\VinculoPlanejamentoType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class VinculoPlanejamentoController extends Controller
{
    /**
     * @Route("vinculoplanejamento", name="vinculo_planejamento")
     */
    public function indexAction()
    {
        $vinculoPlanejamento = $this->getDoctrine()->getRepository('AdminBundle:VinculoPlanejamento')
            ->findBy(
                ['stRegistroAtivo' => 'S'],
                ['dsVinculoPlanejamento' => 'ASC']
            );
        return $this->render('@Admin/VinculoPlanejamento/index.html.twig', ['vinculo' => $vinculoPlanejamento]);
    }

    /**
     * @Route("vinculoplanejamento/add", name="vinculoplanejamento_add")
     */
    public function addAction(Request $request){
        $form = $this->createForm(VinculoPlanejamentoType::class);
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
                $this->addFlash("success", "Vínculo de Planejamento registrado com sucesso!");
            }catch (\Exception $e)            {
                $doctrine->getConnection()->rollBack();
                $this->addFlash("error", "Algum error ocorreu a tentar registrar o Vinculo de Planejamento ");
                throw $e;
            }

            return $this->redirectToRoute('vinculo_planejamento');
        }
        return $this->render('@Admin/VinculoPlanejamento/add.html.twig', ['form' => $form->createView()]);
    }

    /**
     * @Route("vinculoplanejamento/edit/{id}", name="vinculoplanejamento_edit")
     */
    public function editAction(VinculoPlanejamento $vinculoPlanejamento, Request $request){
        $form = $this->createForm(VinculoPlanejamentoType::class, $vinculoPlanejamento);
        $form->handleRequest($request);



        if ($form->isValid() && $form->isSubmitted()){

            $postData = $form->getData();
            $postData->setDtAtualizacao(new \DateTime("now", new \DateTimeZone("America/Sao_Paulo")));
            $doctrine = $this->getDoctrine()->getEntityManager();


            $doctrine->persist($postData);
            $doctrine->flush();

            $this->addFlash("success", "Vínculo de Planejamento editado com sucesso!");
            return $this->redirectToRoute('vinculo_planejamento');
        }

        return $this->render('@Admin/VinculoPlanejamento/add.html.twig', ['form' => $form->createView()]);
    }

    /**
     * @Route("vinculoplanejamento/disable/{id}", name="vinculoplanejamento_disable")
     */
    public function disableAction(Request $request, $id = null){

        $em = $this->getDoctrine()->getManager();
        $vinculoPlanejamento = $em->getRepository(VinculoPlanejamento::class)->find($id);

        if(!$vinculoPlanejamento){
            throw $this->createNotFoundException(
                'O Vínculo de Planejamento selecionado, não foi encontrado!'
            );
        }

        $vinculoPlanejamento->setStRegistroAtivo('N');
        $vinculoPlanejamento->setDtAtualizacao(new \DateTime("now", new \DateTimeZone("America/Sao_Paulo")));
        $em->flush();
        $this->addFlash("success", "Vínculo de Planejamento desativado com sucesso!");

        return $this->redirectToRoute('vinculo_planejamento');
    }
}
