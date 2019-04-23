<?php

namespace Admin\AdminBundle\Controller;

use Admin\AdminBundle\Entity\AcaoOrcamentaria;
use Admin\AdminBundle\Entity\AtividadePlanoUso;
use Admin\AdminBundle\Form\AtividadePlanoUsoType;
use Admin\AdminBundle\Form\ProcessamentoAcaoType;
use Admin\AdminBundle\Form\ProcessamentoType;
use ClassesWithParents\D;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class ProcessamentoController extends Controller
{
    /**
     * @Route("processamento/{nuAno}", name="processamento_index")
     */
    public function indexAction(Request $request,$nuAno = null)
    {

        $acaoorcamentaria = $this->getDoctrine()->getRepository(AcaoOrcamentaria::class);
        $anoExercicio = $acaoorcamentaria->listarAnoExerciciForm();

        $form = $this->createForm(ProcessamentoType::class);
        $form->handleRequest($request);

        if ($form->isValid() && $form->isSubmitted()){

            $data = $request->request->all('processamento');

            try{
                $acaoorcamentaria = $this->getDoctrine()->getRepository(AcaoOrcamentaria::class)
                    ->consultaProcessamento($data);
            }catch (\Exception $e)            {
//                $doctrine->getConnection()->rollBack();
                $this->addFlash("error", "Algum error ocorreu a tentar registrar o Instrumento");
                throw $e;
            }

           // return $this->redirectToRoute('instrumento');
        }

        return $this->render('@Admin/Processamento/index.html.twig', array(
            'anoExercicio' => $anoExercicio,
            'title_page' => 'Processamento',
            'nuAno' => $nuAno,
            'acaoorcamentaria' => $acaoorcamentaria,
            'form' => $form->createView()
        ));
    }

    /**
     * @Route("processamento/acao/{id}", name="processamento_acao" , options={ "expose" = true })
     */
    public function processamentoacaoAction(Request $request, $id){

        $acaoOrcamentaria = $this->getDoctrine()->getRepository(AcaoOrcamentaria::class)->acaoOrcamentariaId($id);
        $totalizadores = $this->getDoctrine()->getRepository(AcaoOrcamentaria::class)->totalizadoresAcaoOrcamentaria($id);


        $form = $this->createForm(ProcessamentoAcaoType::class);
        $form->handleRequest($request);

        $param = null;
        if ($form->isValid() && $form->isSubmitted()){
            $param = $request->request->all('processamentoFilter');
            try{
                $atividadePlanoUso = $this->getDoctrine()->getRepository(AtividadePlanoUso::class)->listarAtividade($id, $param);
            }catch (\Exception $e)            {
//                $doctrine->getConnection()->rollBack();
                $this->addFlash("error", "Algum error ocorreu a tentar registrar o Instrumento");
                throw $e;
            }

            // return $this->redirectToRoute('instrumento');
        }else{
            $atividadePlanoUso = $this->getDoctrine()->getRepository(AtividadePlanoUso::class)->listarAtividade($id, $param);

        }

        return $this->render('@Admin/Processamento/processamentoacao.html.twig', [
                'acaoOrcamentaria' => $acaoOrcamentaria,
                'atividadePlanoUso' => $atividadePlanoUso,
                'totalizadores'=>$totalizadores,
                'form' => $form->createView()
            ]
        );

    }


    /**
     * @Route("edit/{idAcao}/{id}", name="processamento_edit")
     */
    public function editAction(AtividadePlanoUso  $atividadePlanoUso, Request $request, $idAcao, $id){

        $acaoOrcamentaria = $this->getDoctrine()->getRepository(AcaoOrcamentaria::class)->acaoOrcamentariaId($idAcao);
        $saldoValidacao = ($acaoOrcamentaria['vlSaldo'] + $atividadePlanoUso->getVlExecutarExercicio());
        $form = $this->createForm(AtividadePlanoUsoType::class, $atividadePlanoUso, array('vlSaldo' => $saldoValidacao));

        $totalizadores = $this->getDoctrine()->getRepository(AcaoOrcamentaria::class)->totalizadoresAcaoOrcamentaria($idAcao);
        $form->handleRequest($request);


        if ($form->isSubmitted()){
            if ($form->isValid()){

                $postData = $form->getData();
                $postData->setCoUsuarioProcessamento($this->getUser()->getId());
                $postData->setDtAtualizacao(new \DateTime("now", new \DateTimeZone("America/Sao_Paulo")));
                $postData->setDsIpUsuarioProcessamento($request->getClientIp());
                $doctrine = $this->getDoctrine()->getManager();
                $doctrine->getConnection()->beginTransaction();
                try{
                    $doctrine->persist($postData);
                    $doctrine->flush();
                    $doctrine->getConnection()->commit();
                    $this->addFlash("success", "Atividade atualizada com sucesso!");
                    return $this->redirectToRoute('processamento_acao', array('id' => $idAcao));
                }catch (\Exception $e)            {
                    $doctrine->getConnection()->rollBack();
                    $this->addFlash("error", "Algum error ocorreu a tentar registrar a Atividade");
                    throw $e;
                }
            }
        }

        return $this->render('@Admin/Processamento/edit.html.twig', [
                'acaoOrcamentaria' => $acaoOrcamentaria,
                'totalizadores'=>$totalizadores,
                'form' => $form->createView(),
            ]
        );
    }
    
    /**
     * @Route("processamento/jsonlistaacao/{anoExercicio}/{acaoOrcamentaria}/{departamento}", name="json_lista_processamento", options={ "expose" = true })
     * @return JsonResponse
     */
    public function jsonlistaacaoAction($acaoOrcamentaria,$departamento, $anoExercicio)
    {
        $acaoorcamentaria = $this->getDoctrine()->getRepository(AcaoOrcamentaria::class)
            ->jsonListarAcaoComAtividade($anoExercicio);

        $json = array();
        foreach ($acaoorcamentaria as $acao) {
            $json[] = [
                $acao['id'],
                $acao['nuAnoExercicio'],
                $acao['nuAcaoOrcamentaria'].'-'.$acao['nuPlanoOrcamentario'],
                $acao['dsTipoDespesa'],
                $acao['sgDepartamento'],
                $acao['sgDepartamentoVinculado'],
                $acao['dsDenominacao'],
                number_format($acao['vlAtualizado'], 2, ',', '.'),
                number_format($acao['vlDespesaEmpenhada'], 2, ',', '.'),
                number_format($acao['vlSaldo'], 2, ',', '.'),
                number_format($acao['vlProcessadoCgpo'], 2, ',', '.'),
                $acao['qtAtividade'],
            ];
        }
        return new JsonResponse(
            array(
                'data' => $json
            )
        );

    }

}