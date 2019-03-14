<?php

namespace Admin\AdminBundle\Controller;

use Admin\AdminBundle\Entity\AcaoOrcamentaria;
use Admin\AdminBundle\Entity\Departamento;
use Admin\AdminBundle\Entity\RlAcaoOrcamentariaDepartamento;
use Admin\AdminBundle\Form\RlAcaoOrcamentariaDepartamentoType;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class VincularAcaoDepartamentoController extends Controller
{
    /**
     * @Route("vincularacao/{nuAno}", name="vincularacao_index")
     */
    public function indexAction($nuAno = null)
    {

        $acaoorcamentaria = $this->getDoctrine()->getRepository(AcaoOrcamentaria::class);
        $anoExercicio = $acaoorcamentaria->listarAnoExercicio();
        return $this->render('@Admin\VincularAcaoDepartamento\index.html.twig', array(
            'anoExercicio' => $anoExercicio,
            'nuAno' => $nuAno
        ));
    }

    /**
     * @Route("vincularacao/vincular/{idAcao}", name="vincularacao_vincular", options={ "expose" = true })
     */
    public function vincularAction(Request $request, $idAcao)
    {

        $acaoOrcamentaria = $this->getDoctrine()->getRepository(AcaoOrcamentaria::class)->acaoOrcamentariaId($idAcao);
        $rlAcaoDepartamento = $this->getDoctrine()->getRepository(RlAcaoOrcamentariaDepartamento::class)->findBy(array('coAcaoOrcamentaria' => $idAcao));

        $formVinculacao = $this->createForm(RlAcaoOrcamentariaDepartamentoType::class, $this->alimentaRlDepartamento($rlAcaoDepartamento));

        $formVinculacao->handleRequest($request);
        if ($formVinculacao->isSubmitted() && $formVinculacao->isValid()){

            $pesistAcaoOrcamentaria = $this->getDoctrine()->getRepository(AcaoOrcamentaria::class)->find($idAcao);
            $postData = $formVinculacao->getData();

            $departamento = $this->getDoctrine()->getRepository(Departamento::class)->findAll();
            $postDepartamento = array();

            foreach ($postData->getArrayDepartamento() as $item) {
                $postDepartamento[$item->getId()] = $item;
            }

            $rlRegistro = array();
            foreach ($rlAcaoDepartamento as $item){
                $rlRegistro[$item->getCoDepartamento()] = $item;
            }

            $em = $this->getDoctrine()->getManager();
            $em->getConnection()->beginTransaction();
            try {
                foreach ($departamento as $item) {
                    /**
                     * se o idDepartamento não existe na RL, ele é criado
                     */
                    if (isset($postDepartamento[$item->getId()]) && !isset($rlRegistro[$item->getId()])) {
                        $persitRlAcaoDep = new RlAcaoOrcamentariaDepartamento();
                        $persitRlAcaoDep->setAcaoOrcamentaria($pesistAcaoOrcamentaria);
                        $persitRlAcaoDep->setDepartamento($item);
                        $persitRlAcaoDep->setStRegistroAtivo('S');
                        $persitRlAcaoDep->setDtCadastro(new \DateTime("now", new \DateTimeZone("America/Sao_Paulo")));
                        $persitRlAcaoDep->setDtAtualizacao(new \DateTime("now", new \DateTimeZone("America/Sao_Paulo")));
                        $em->persist($persitRlAcaoDep);
                    } /**
                     * se o idDepartamento existe na RL e foi marcado ele é ativado
                     */
                    elseif (isset($postDepartamento[$item->getId()]) && isset($rlRegistro[$item->getId()])) {
                        $persitRlAcaoDep = $rlRegistro[$item->getId()];
                        $persitRlAcaoDep->setStRegistroAtivo('S');
                        $persitRlAcaoDep->setDtAtualizacao(new \DateTime("now", new \DateTimeZone("America/Sao_Paulo")));
                        $em->persist($persitRlAcaoDep);
                        $em->flush();
                    } /**
                     * se o idDepartamento existe na RL mas não foi marcado no checkbox ele é desativado
                     */
                    elseif (!isset($postDepartamento[$item->getId()]) && isset($rlRegistro[$item->getId()])) {
                        $persitRlAcaoDep = $rlRegistro[$item->getId()];
                        $persitRlAcaoDep->setStRegistroAtivo('N');
                        $persitRlAcaoDep->setDtAtualizacao(new \DateTime("now", new \DateTimeZone("America/Sao_Paulo")));
                        $em->persist($persitRlAcaoDep);
                        $em->flush();
                    }
                }
                $em->flush();
                $em->getConnection()->commit();
                $this->addFlash("success", "Departamentos vinculados com sucesso!");
            }catch (\Exception $e){
                $em->getConnection()->rollBack();
                $this->addFlash("error", "Algum error ocorreu a tentar vincular o Departamento");
                throw $e;
            }

        }


        return $this->render('@Admin\VincularAcaoDepartamento\vincular.html.twig', array(
            'acaoOrcamentaria' => $acaoOrcamentaria,
            'form' => $formVinculacao->createView()
        ));
    }

    /**
     * @Route("vincularacao/jsonlistaacao/{anoExercicio}", name="json_lista_acao", options={ "expose" = true })
     * @return JsonResponse
     */
    public function jsonlistaacaoAction($anoExercicio)
    {
        $acaoorcamentaria = $this->getDoctrine()->getRepository(AcaoOrcamentaria::class)->jsonListarAcaoOrcamentaria($anoExercicio);

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
                //$acao['vlDespesaEmpenhadaAliquidar'],
                //$acao['vlDepesaEmpenhadaLiquidada'],
                //$acao['vlDespesaPaga'],
                number_format($acao['vlSaldo'], 2, ',', '.'),
                $acao['qtAtividade'],
            ];
        }

        return new JsonResponse(
            array(
                'data' => $json
            )
        );
    }

    /**
     * alimenta a entity RlAcaoOrcamentariaDepartamento para renderização do formulário
     * @param $rlAcaoDepartamento
     * @return RlAcaoOrcamentariaDepartamento
     */
    private function alimentaRlDepartamento($rlAcaoDepartamento){
        $rlAcaoDepartamentoRegistrado = new RlAcaoOrcamentariaDepartamento();
        if ($rlAcaoDepartamento) {
            foreach ($rlAcaoDepartamento as $item) {
                if ($item->getStRegistroAtivo() == 'S')
                    $rlAcaoDepartamentoRegistrado->setArrayDepartamento($item->getDepartamento());
            }
        }
        return $rlAcaoDepartamentoRegistrado;
    }
}
