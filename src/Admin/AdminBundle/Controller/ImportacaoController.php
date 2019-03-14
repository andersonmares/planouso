<?php

namespace Admin\AdminBundle\Controller;

use Admin\AdminBundle\Entity\AcaoOrcamentaria;
use Admin\AdminBundle\Entity\Departamento;
use Admin\AdminBundle\Entity\HistoricoPlanilha;
use Admin\AdminBundle\Entity\NotaEmpenho;
use Admin\AdminBundle\Entity\RlAcaoOrcamentariaDepartamento;
use Admin\AdminBundle\Entity\TipoDespesa;
use Admin\AdminBundle\Form\PlanilhaOrcamentariaType;
use Admin\AdminBundle\Utils\ValidaPlanilhaNotaEmpenho;
use Admin\AdminBundle\Utils\ValidaPlanilhaOrcamentaria;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use PhpOffice\PhpSpreadsheet\IOFactory;


class ImportacaoController extends Controller
{
    private $errosPlanilha;

    /**
     * @Route("importacao", name="importacao")
     */
    public function indexAction(Request $request)
    {

        $rsHistorico = $this->getDoctrine()->getRepository(HistoricoPlanilha::class)->listarHistorico();

        $form = $this->createForm(PlanilhaOrcamentariaType::class);

        $form->handleRequest($request);
        $erros = null;
        if ($form->isSubmitted() && $form->isValid()){
            $postData = $form->getData();
            $file = $postData['planilha'];
            $spreadsheet = IOFactory::load($file->getPathname());
            $sheetData = $spreadsheet->getActiveSheet()->toArray(null, false, false, true);
            if ($postData['tpPlanilha'] == 'acaoOrcamentaria') {

                $this->planilhaAcaoOcamentaria($spreadsheet->getActiveSheet()->getTitle(), $sheetData, $postData);
            }elseif ($postData['tpPlanilha'] == 'notaEmpenho'){
                $this->planilhaNotaEmpenho($spreadsheet->getActiveSheet()->getTitle(), $sheetData, $postData);
            }
        }

        return $this->render('@Admin\Importacao\index.html.twig', array(
            'form' => $form->createView(),
            'erros' => $this->errosPlanilha,
            'rsHistorico' => $rsHistorico
        ));
    }

    /**
     * @param $sheetData
     * @throws \Exception
     * importação da planilha de ação orçamentária
     */
    private function planilhaAcaoOcamentaria($noPlanilha, $sheetData, $postData){

        $departamento   = $this->getDoctrine()->getRepository(Departamento::class)->listaDepartamento();
        $tipoDespesa    = $this->getDoctrine()->getRepository(TipoDespesa::class)->listaTipoDespesa();
        $validaPlanilhaOrcamentaria = new ValidaPlanilhaOrcamentaria($sheetData, $departamento, $tipoDespesa);

        if ($validaPlanilhaOrcamentaria->validar()) {

            $listaAcaoOrcamentaria = $this->getDoctrine()->getRepository(AcaoOrcamentaria::class)->listarAcaoOrcamentaria($postData['nuAnoExercicio']);

            $listaIdDepartamento = $this->listaIdDepartamento($departamento);

            $listaIdAcaoRegistrada = $this->listaIdAcaoRegistrada($listaAcaoOrcamentaria);

            $em = $this->getDoctrine()->getManager();
            $em->getConnection()->beginTransaction();

            $qtRegistro = 0;
            $qtRegistroNovo = 0;
            $qtRegistroAtualizado = 0;

            try {

                foreach ($sheetData as $key => $data) {
                    if ($key > 5) {//começa a verificar os valores a partir da linha 6
                        $idDepartamento = $listaIdDepartamento[$data['A']];
                        if (isset($listaIdAcaoRegistrada[$idDepartamento][$data['B']][$data['C']][$data['E']])) {
                            $acaoOrcamentaria = $this->getDoctrine()->getRepository(AcaoOrcamentaria::class)->find($listaIdAcaoRegistrada[$idDepartamento][$data['B']][$data['C']][$data['E']]);
                            $novoRegistro = false;
                            $qtRegistroAtualizado++;

                        }else{
                            $acaoOrcamentaria = new AcaoOrcamentaria();
                            $acaoOrcamentaria->setCoDepartamento($idDepartamento);
                            $novoRegistro = true;
                            $qtRegistroNovo++;
                        }
                        $acaoOrcamentaria->setNuAnoExercicio($postData['nuAnoExercicio']);
                        $acaoOrcamentaria->setCoUsuario($this->getUser()->getId());
                        $acaoOrcamentaria->setCoTipoDespesa($data['E']);
                        $acaoOrcamentaria->setDsDenominacao($data['D']);
                        $acaoOrcamentaria->setNuAcaoOrcamentaria($data['B']);
                        $acaoOrcamentaria->setNuPlanoOrcamentario($data['C']);
                        $acaoOrcamentaria->setVlAprovado($data['I']);
                        $acaoOrcamentaria->setVlAtualizado($data['J']);
                        $acaoOrcamentaria->setVlDespesaEmpenhada($data['L']);
                        $acaoOrcamentaria->setVlDepesaEmpenhadaLiquidada($data['M']);
                        $acaoOrcamentaria->setVlDespesaPaga($data['N']);
                        if (!isset($listaIdAcaoRegistrada[$idDepartamento][$data['F']][$data['G']][$data['D']])) {
                            $acaoOrcamentaria->setDtCadastro(new \DateTime("now", new \DateTimeZone("America/Sao_Paulo")));
                        }
                        $acaoOrcamentaria->setDtAtualizacao(new \DateTime("now", new \DateTimeZone("America/Sao_Paulo")));
                        $acaoOrcamentaria->setStRegistroAtivo('S');
                        $em->persist($acaoOrcamentaria);

                        if ($novoRegistro){
                            $rlDepartamento = $this->getDoctrine()->getRepository(Departamento::class)->find($idDepartamento);
                            $rlAcaoOrcamentariaDepartamento = new RlAcaoOrcamentariaDepartamento();
                            $rlAcaoOrcamentariaDepartamento->setAcaoOrcamentaria($acaoOrcamentaria);
                            $rlAcaoOrcamentariaDepartamento->setDepartamento($rlDepartamento);
                            $rlAcaoOrcamentariaDepartamento->setDtCadastro(new \DateTime("now", new \DateTimeZone("America/Sao_Paulo")));
                            $rlAcaoOrcamentariaDepartamento->setDtAtualizacao(new \DateTime("now", new \DateTimeZone("America/Sao_Paulo")));
                            $rlAcaoOrcamentariaDepartamento->setStRegistroAtivo('S');
                            $em->persist($rlAcaoOrcamentariaDepartamento);
                        }
                        $qtRegistro++;
                    }

                }


                $file = $postData['planilha'];
                $historicoPlanilha = new HistoricoPlanilha();
                $historicoPlanilha->setCoUsuario($this->getUser()->getId());
                $historicoPlanilha->setTpPlanilha('1');
                $historicoPlanilha->setNuAnoExercicio($postData['nuAnoExercicio']);
                $historicoPlanilha->setNoArquivo($file->getClientOriginalName());
                $historicoPlanilha->setNoPlanilha($noPlanilha);
                $historicoPlanilha->setQtRegistro($qtRegistro);
                $historicoPlanilha->setQtRegistroNovo($qtRegistroNovo);
                $historicoPlanilha->setQtRegistroAtualizado($qtRegistroAtualizado);
                $historicoPlanilha->setStRegistroAtivo('S');
                $historicoPlanilha->setDtCadastro(new \DateTime("now", new \DateTimeZone("America/Sao_Paulo")));
                $em->persist($historicoPlanilha);

                $em->flush();
                $em->getConnection()->commit();
                $this->addFlash("success", "Planilha de Ação orçamentária importada com sucesso." );
            }catch (Exception $e){
                $em->getConnection()->rollBack();
                $this->addFlash("error", "Ocorreu um erro no sistema ao tentar importar a planilha." );

                throw $e;
            }

        }else{
            $this->errosPlanilha = $validaPlanilhaOrcamentaria->getErros();
        }

    }

    private function planilhaNotaEmpenho($noPlanilha, $sheetData, $postData){

        $validaPlanilhaNotaEmpenho = new ValidaPlanilhaNotaEmpenho($sheetData);

        $rsNotaEmpenho = $this->getDoctrine()->getRepository(NotaEmpenho::class)->listarNotaEmpenho($postData['nuAnoExercicio']);

        $notaEmpenhoRegistrada = $this->listaIdNotaEmpenhoRegistrada($rsNotaEmpenho);
        $qtRegistro = 0;
        $qtRegistroNovo = 0;
        $qtRegistroAtualizado = 0;

        if ($validaPlanilhaNotaEmpenho->validar()) {
            $em = $this->getDoctrine()->getManager();
            $em->getConnection()->beginTransaction();
            try {

                foreach ($sheetData as $key => $data) {
                    if ($key > 6) {

                        if (isset($notaEmpenhoRegistrada[$data['F']])) {
                            $notaEmpenho = $this->getDoctrine()->getRepository(NotaEmpenho::class)->find($notaEmpenhoRegistrada[$data['F']]);
                            if (
                                    $notaEmpenho->getNuAcaoOrcamentaria() != $data['C'] ||
                                    $notaEmpenho->getNuPlanoOrcamentario() != $data['D'] ||
                                    $notaEmpenho->getDsNotaEmpenho() != $data['E'] ||
                                    $notaEmpenho->getNuProcesso() != $data['G'] ||
                                   number_format($notaEmpenho->getVlEmpenhado(), '2' ) != $data['H']

                            ) {
                                $qtRegistroAtualizado++;
                            }
                        } else {
                            $notaEmpenho = new NotaEmpenho();
                            $notaEmpenho->setDtCadastro(new \DateTime("now", new \DateTimeZone("America/Sao_Paulo")));
                            $qtRegistroNovo++;
                        }

                        $notaEmpenho->setNuAnoExercicio($postData['nuAnoExercicio']);
                        $notaEmpenho->setCoUsuario($this->getUser()->getId());
                        $notaEmpenho->setNuAcaoOrcamentaria($data['C']);
                        $notaEmpenho->setNuPlanoOrcamentario($data['D']);
                        $notaEmpenho->setDsNotaEmpenho($data['E']);
                        $notaEmpenho->setNuNotaEmpenho($data['F']);
                        $notaEmpenho->setNuProcesso($data['G']);
                        $notaEmpenho->setVlEmpenhado($data['H']);
                        $notaEmpenho->setDtAtualizacao(new \DateTime("now", new \DateTimeZone("America/Sao_Paulo")));
                        $notaEmpenho->setStRegistroAtivo('S');
                        $em->persist($notaEmpenho);
                        $qtRegistro++;
                    }

                }

                $file = $postData['planilha'];
                $historicoPlanilha = new HistoricoPlanilha();
                $historicoPlanilha->setCoUsuario($this->getUser()->getId());
                $historicoPlanilha->setNuAnoExercicio($postData['nuAnoExercicio']);
                $historicoPlanilha->setTpPlanilha('2');
                $historicoPlanilha->setNoArquivo($file->getClientOriginalName());
                $historicoPlanilha->setNoPlanilha($noPlanilha);
                $historicoPlanilha->setQtRegistro($qtRegistro);
                $historicoPlanilha->setQtRegistroNovo($qtRegistroNovo);
                $historicoPlanilha->setQtRegistroAtualizado($qtRegistroAtualizado);
                $historicoPlanilha->setStRegistroAtivo('S');
                $historicoPlanilha->setDtCadastro(new \DateTime("now", new \DateTimeZone("America/Sao_Paulo")));
                $em->persist($historicoPlanilha);

                $em->flush();
                $em->getConnection()->commit();
                $this->addFlash("success", "Planilha de Nota de Empenho importada com sucesso." );
            }catch (Exception $e){
                $em->getConnection()->rollBack();
                $this->addFlash("error", "Ocorreu um erro no sistema ao tentar importar a planilha." );

                throw $e;
            }
        }else{
            $this->errosPlanilha = $validaPlanilhaNotaEmpenho->getErros();
        }
    }


    private function historicoPlanilha($qtRegistro, $tpPlanilha, $qtRegistroNovo, $qtRegistroAtualizado){

    }

    /**
     * retorna um array onde o indice é a Sigla do Departamento e o valor é o id do departamento
     * @param $departamento
     * @return mixed
     */
    private function listaIdDepartamento($departamento) {

        return array_combine(array_column($departamento, 'sgDepartamento'),  array_column($departamento, 'id'));

    }

    /**
     * retortana um array onde o indice é uma combinação do idDepartamento, nuAcaoOrcamentaria e nuPlanoOrcamentario e o valor é o id da ação orcamentária
     * @param $acaoOrcamentaria
     * @return array
     */
    private function listaIdAcaoRegistrada($acaoOrcamentaria) {

        $acaoRegistrada = array();

        foreach ($acaoOrcamentaria as $acao){
            $acaoRegistrada[$acao->getCoDepartamento()][$acao->getNuAcaoOrcamentaria()][$acao->getNuPlanoOrcamentario()][$acao->getCoTipoDespesa()] = $acao->getId();
        }

        return $acaoRegistrada;
    }

    private function listaIdNotaEmpenhoRegistrada($rsNotaEmpenho) {
        $notaEmpenhoRegistrada = array();

        foreach ($rsNotaEmpenho as $notaEmpenho){
            $notaEmpenhoRegistrada[$notaEmpenho->getNuNotaEmpenho()] = $notaEmpenho->getId();
        }

        return $notaEmpenhoRegistrada;

    }

}
