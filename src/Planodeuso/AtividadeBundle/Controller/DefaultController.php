<?php

namespace Planodeuso\AtividadeBundle\Controller;

use Admin\AdminBundle\Entity\NotaEmpenho;
use Admin\AdminBundle\Entity\RlNotaEmpenhoAtividadePlanouso;
use Planodeuso\AtividadeBundle\Entity\AcaoOrcamentaria;
use Planodeuso\AtividadeBundle\Entity\AtividadePlanoUso;
use Planodeuso\AtividadeBundle\Form\AtividadePlanoUsoType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{

    /**
     * @Route("/{nuAno}", name="planodeuso_atividade")
     */
    public function indexAction($nuAno = null)
    {
        $acaoOrcamentaria = $this->getDoctrine()->getRepository(AcaoOrcamentaria::class);

        $anoExercicio = $acaoOrcamentaria->listarAnoExercicio($this->getUser()->getCoDepartamento());
        $listaAcaoOrcamentaria = $acaoOrcamentaria->listarAcaoOrcamentaria($this->getUser()->getCoDepartamento(), date('Y'));

      
        return $this->render('@Atividade/default/index.html.twig', [
                'listaAcaoOrcamentaria' => $listaAcaoOrcamentaria,
                'anoExercicio' => $anoExercicio,
                'nuAno' => $nuAno
            ]
        );
    }

    /**
     * @Route("acao/{id}", name="planodeuso_acao" , options={ "expose" = true })
     */
    public function acaoorcamentariaAction(Request $request, $id){

        $acaoOrcamentaria = $this->getDoctrine()->getRepository(AcaoOrcamentaria::class)->acaoOrcamentariaId($this->getUser()->getCoDepartamento(), $id);

        $atividadePlanoUso = $this->getDoctrine()->getRepository(AtividadePlanoUso::class)->listarAtividade($id, $this->getUser()->getCoDepartamento());

        return $this->render('@Atividade/default/acaoorcamentaria.html.twig', [
                'acaoOrcamentaria' => $acaoOrcamentaria,
                'atividadePlanoUso' => $atividadePlanoUso,
                'labelVlProcessado' => 'acao'
            ]
        );

    }

    /**
     * @Route("add/{idAcao}", name="planodeuso_atividade_add")
     */
    public function addAction(Request $request, $idAcao) {

        $acaoOrcamentaria = $this->getDoctrine()->getRepository(AcaoOrcamentaria::class)->acaoOrcamentariaId($this->getUser()->getCoDepartamento(), $idAcao);

        $atividadePlanoUso = new AtividadePlanoUso();

        $form = $this->createForm(AtividadePlanoUsoType::class, $atividadePlanoUso, array(
                'vlSaldo' => $acaoOrcamentaria['vlSaldo'],
                'coDepartamento' => $this->getUser()->getCoDepartamento()
            )
        );

        $form->handleRequest($request);

        if ($form->isSubmitted()){
            if ($form->isValid()){
                
                $postData = $form->getData();
                $postData->setCoAcaoOrcamentaria($idAcao);
                $postData->setCoUsuario($this->getUser()->getId());
                $postData->setCoDepartamento($this->getUser()->getCoDepartamento());
                $postData->setDtCadastro(new \DateTime("now", new \DateTimeZone("America/Sao_Paulo")));
                $postData->setDtAtualizacao(new \DateTime("now", new \DateTimeZone("America/Sao_Paulo")));
                $postData->setDsIpUsuario($request->getClientIp());
                $postData->setStRegistroAtivo('S');
                $doctrine = $this->getDoctrine()->getManager();
                $doctrine->getConnection()->beginTransaction();

                try{
                    $doctrine->persist($postData);
                    $doctrine->flush();
                    $doctrine->getConnection()->commit();
                    $this->addFlash("success", "Atividade registrada com sucesso!");
                    return $this->redirectToRoute('planodeuso_acao', array('id' => $idAcao));
                }catch (\Exception $e)            {
                    $doctrine->getConnection()->rollBack();
                    $this->addFlash("error", "Algum error ocorreu a tentar registrar a Atividade");
                    throw $e;
                }
            }

        }

        return $this->render('@Atividade/default/add.html.twig', [
                'acaoOrcamentaria' => $acaoOrcamentaria,
                'atividadePlanoUso' => $atividadePlanoUso,
                'labelVlProcessado' => 'atividade',
                'form' => $form->createView(),
            ]
        );
    }

    /**
     * @Route("edit/{idAcao}/{id}", name="planodeuso_atividade_edit")
     */
    public function editAction(AtividadePlanoUso  $atividadePlanoUso, Request $request, $idAcao, $id){

        $acaoOrcamentaria = $this->getDoctrine()->getRepository(AcaoOrcamentaria::class)->acaoOrcamentariaId($this->getUser()->getCoDepartamento(), $idAcao);

        $saldoValidacao = ($acaoOrcamentaria['vlSaldo'] + $atividadePlanoUso->getVlExecutarExercicio());

        $form = $this->createForm(AtividadePlanoUsoType::class, $atividadePlanoUso, array('vlSaldo' => $saldoValidacao, 'coDepartamento' => $this->getUser()->getCoDepartamento()));

        $form->handleRequest($request);

        if ($form->isSubmitted()){
            if ($form->isValid()){
                $postData = $form->getData();
                $postData->setCoUsuario($this->getUser()->getId());
                $postData->setDtAtualizacao(new \DateTime("now", new \DateTimeZone("America/Sao_Paulo")));
                $postData->setDsIpUsuario($request->getClientIp());
                $em = $this->getDoctrine()->getManager();
                $em->getConnection()->beginTransaction();
                try{
                    $em->persist($postData);
                    $em->flush();
                    $em->getConnection()->commit();
                    $this->addFlash("success", "Atividade atualizada com sucesso!");
                    return $this->redirectToRoute('planodeuso_acao', array('id' => $idAcao));
                }catch (\Exception $e)            {
                    $em->getConnection()->rollBack();
                    $this->addFlash("error", "Algum error ocorreu a tentar registrar a Atividade");
                    throw $e;
                }
            }


        }

        return $this->render('@Atividade/default/add.html.twig', [
                'acaoOrcamentaria' => $acaoOrcamentaria,
                'atividadePlanoUso' => $atividadePlanoUso,
                'labelVlProcessado' => 'atividade',
                'form' => $form->createView(),
            ]
        );
    }

    /**
     * @Route("excluir/{idAcao}/{id}", name="planodeuso_atividade_excluir", options={ "expose" = true })
     */
    public function excluirAction(Request $request, $idAcao = null, $id = null) {
        $acaoOrcamentaria = $this->getDoctrine()->getRepository(AcaoOrcamentaria::class)->acaoOrcamentariaId($this->getUser()->getCoDepartamento(), $idAcao );
        $atividadePlanoUso = $this->getDoctrine()->getRepository(AtividadePlanoUso::class)->atividadeId($id, $this->getUser()->getCoDepartamento());
        if ($acaoOrcamentaria["id"] && $atividadePlanoUso['id']){

            $em = $this->getDoctrine()->getManager();
            $atividade = $em->getRepository(AtividadePlanoUso::class)->find($id);
            if(!$atividade){
                throw $this->createNotFoundException(
                    'A atividade não foi localizada!'
                );
            }

            $atividade->setStRegistroAtivo('N');
            $atividade->setCoUsuario($this->getUser()->getId());
            $atividade->setDtAtualizacao(new \DateTime("now", new \DateTimeZone("America/Sao_Paulo")));
            $atividade->setDsIpUsuario($request->getClientIp());
            $em->flush();
            $this->addFlash("success", "Atividade excluída com sucesso!");

        }else{
            $this->addFlash("error", "A atividade não foi encontrada ou ela não pertence ao seu departamento!");
        }

        return $this->redirectToRoute('planodeuso_acao', ['id' => $idAcao]);
    }

    /**
     * @Route("notaempenho/{idAcao}/{id}", name="planodeuso_nota_empenho")
     */
    public function notaempenhoAction(Request $request, $idAcao, $id){
        $acaoOrcamentaria = $this->getDoctrine()->getRepository(AcaoOrcamentaria::class)->acaoOrcamentariaId($this->getUser()->getCoDepartamento(), $idAcao);
        $atividadePlanoUso = $this->getDoctrine()->getRepository(AtividadePlanoUso::class)->atividadeId($id, $this->getUser()->getCoDepartamento());
        $notaEmpenho = $this->getDoctrine()->getRepository(NotaEmpenho::class)->listaNotaEmpenhoAcao($acaoOrcamentaria['nuAcaoOrcamentaria'], $acaoOrcamentaria['nuPlanoOrcamentario']);

        return $this->render('@Atividade/default/notaempenho.html.twig', [
                'acaoOrcamentaria' => $acaoOrcamentaria,
                'atividadePlanoUso' => $atividadePlanoUso,
                'notaEmpenho' => $notaEmpenho
            ]
        );
    }

    /**
     * @Route("notaempenho/vincular/{idAtividade}/{idNotaEmpenho}", name="planodeuso_nota_empenho_vincular")
     */
    public function notaempenhoVincularAction($idAtividade = null, $idNotaEmpenho = null) {

        $atividadePlanoUso = $this->getDoctrine()->getRepository(AtividadePlanoUso::class)->find($idAtividade);
        $notaEmpenho = $this->getDoctrine()->getRepository(NotaEmpenho::class)->find($idNotaEmpenho);
        if(!$atividadePlanoUso || !$notaEmpenho){
            throw $this->createNotFoundException(
                'A atividade ou a nota de empenho não foram localizadas!'
            );
        }

        $vinculoNotaEmpenho = $this->getDoctrine()->getRepository(RlNotaEmpenhoAtividadePlanouso::class)->findOneBy([
            'coAtividadePlanouso' => $idAtividade,
            'coNotaEmpenhoPlanouso' => $idNotaEmpenho,
            'stRegistroAtivo' => 'S'
        ]);

        $em = $this->getDoctrine()->getManager();
        $em->getConnection()->beginTransaction();

        if (is_null($vinculoNotaEmpenho)) {
            try {
                $novoVinculo = new RlNotaEmpenhoAtividadePlanouso();
                $novoVinculo->setCoUsuario($this->getUser()->getId());
                $novoVinculo->setCoAtividadePlanouso($idAtividade);
                $novoVinculo->setCoNotaEmpenhoPlanouso($idNotaEmpenho);
                $novoVinculo->setDtCadastro(new \DateTime("now", new \DateTimeZone("America/Sao_Paulo")));
                $novoVinculo->setDtAtualizacao(new \DateTime("now", new \DateTimeZone("America/Sao_Paulo")));
                $novoVinculo->setStRegistroAtivo('S');
                $em->persist($novoVinculo);
                $em->flush();
                $em->getConnection()->commit();
                $this->addFlash("success", "Nota de empenho vinculada com sucesso!");
                return $this->redirectToRoute('planodeuso_nota_empenho', ['idAcao' => $atividadePlanoUso->getCoAcaoOrcamentaria(), 'id' => $atividadePlanoUso->getId()]);
            } catch (\Exception $e) {
                $em->getConnection()->rollBack();
                $this->addFlash("error", "Algum error ocorreu a tentar vincualr a nota de empenho");
                throw $e;
                return $this->redirectToRoute('planodeuso_nota_empenho', ['idAcao' => $atividadePlanoUso->getCoAcaoOrcamentaria(), 'id' => $atividadePlanoUso->getId()]);
            }
        }else{
            return $this->redirectToRoute('planodeuso_nota_empenho', ['idAcao' => $atividadePlanoUso->getCoAcaoOrcamentaria(), 'id' => $atividadePlanoUso->getId()]);
        }


    }

    /**
     * @Route("notaempenho/desvincular/{idAtividade}/{idNotaEmpenho}", name="planodeuso_nota_empenho_desvincular")
     */
    public function notaempenhoDesincularAction($idAtividade = null, $idNotaEmpenho = null) {

        $atividadePlanoUso = $this->getDoctrine()->getRepository(AtividadePlanoUso::class)->find($idAtividade);
        $notaEmpenho = $this->getDoctrine()->getRepository(NotaEmpenho::class)->find($idNotaEmpenho);
        if(!$atividadePlanoUso || !$notaEmpenho){
            throw $this->createNotFoundException(
                'A atividade ou a nota de empenho não foram localizadas!'
            );
        }

        $vinculoNotaEmpenho = $this->getDoctrine()->getRepository(RlNotaEmpenhoAtividadePlanouso::class)->findOneBy([
            'coAtividadePlanouso' => $idAtividade,
            'coNotaEmpenhoPlanouso' => $idNotaEmpenho,
            'stRegistroAtivo' => 'S'
        ]);

        $em = $this->getDoctrine()->getManager();
        $em->getConnection()->beginTransaction();

        if ($vinculoNotaEmpenho) {
            try {
                $vinculoNotaEmpenho->setCoUsuario($this->getUser()->getId());
                $vinculoNotaEmpenho->setDtAtualizacao(new \DateTime("now", new \DateTimeZone("America/Sao_Paulo")));
                $vinculoNotaEmpenho->setStRegistroAtivo('N');
                $em->persist($vinculoNotaEmpenho);
                $em->flush();
                $em->getConnection()->commit();
                $this->addFlash("success", "Nota de empenho Desvinculada com sucesso!");
                return $this->redirectToRoute('planodeuso_nota_empenho', ['idAcao' => $atividadePlanoUso->getCoAcaoOrcamentaria(), 'id' => $atividadePlanoUso->getId()]);
            } catch (\Exception $e) {
                $em->getConnection()->rollBack();
                $this->addFlash("error", "Algum error ocorreu a tentar desvincular a nota de empenho");
                throw $e;
                return $this->redirectToRoute('planodeuso_nota_empenho', ['idAcao' => $atividadePlanoUso->getCoAcaoOrcamentaria(), 'id' => $atividadePlanoUso->getId()]);
            }
        }else{
            $this->addFlash("error", "O vinculo informado não foi localizado!");
            return $this->redirectToRoute('planodeuso_nota_empenho', ['idAcao' => $atividadePlanoUso->getCoAcaoOrcamentaria(), 'id' => $atividadePlanoUso->getId()]);
        }


    }


    /**
     * @Route("jsonlistaacao/{anoExercicio}", name="json_plano_lista_acao", options={ "expose" = true })
     * @return JsonResponse
     */
    public function jsonlistaacaoAction($anoExercicio)
    {

        $acaoOrcamentaria = $this->getDoctrine()->getRepository(AcaoOrcamentaria::class);
        $listaAcaoOrcamentaria = $acaoOrcamentaria->listarAcaoOrcamentaria($this->getUser()->getCoDepartamento(), $anoExercicio);
        $json = array();

        foreach ($listaAcaoOrcamentaria as $acao) {
            $json[] = [
                $acao['id'],
                $acao['nuAnoExercicio'],
                $acao['nuAcaoOrcamentaria'].'-'.$acao['nuPlanoOrcamentario'],
                $acao['dsDenominacao'],
                $acao['dsTipoDespesa'],
                number_format($acao['vlExecutadoExercicioAnterior'], 2, ',', '.'),
                number_format($acao['vlAtualizado'], 2, ',', '.'),
                number_format($acao['vlUtilizado'], 2, ',', '.'),
                number_format($acao['vlSaldo'], 2, ',', '.'),
                number_format($acao['qtAtividade'], 2, ',', '.'),
            ];
        }

        return new JsonResponse(
            array(
                'data' => $json
            )
        );
    }

}
