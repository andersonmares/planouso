<?php

namespace Planodeuso\RelatorioBundle\Controller;

use Admin\AdminBundle\Entity\AcaoOrcamentaria;
use Admin\AdminBundle\Entity\AtividadePlanoUso;
use PhpOffice\PhpSpreadsheet\Cell\DataType;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\RichText\RichText;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Planodeuso\RelatorioBundle\Form\FiltroType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="planodeuso_relatorio")
     */
    public function indexAction()
    {

        $form = $this->createForm(FiltroType::class, null, [
            'action' => $this->generateUrl('planodeuso_relatorio_gerar'),
            'method' => 'POST',
            'attr' => ['target' => '_blank']

        ]);


        return $this->render('RelatorioBundle:Default:index.html.twig',[
            'form' => $form->createView()
        ]);
    }


    /**
    * @Route("/gerar", name="planodeuso_relatorio_gerar")
    */
    public function gerarAction(Request $request) {

        $dataForm = $request->get('filtro');

        if ($dataForm['tpRelatorio'] == 'acaoOrcamentaria') {
            if (in_array('ROLE_DEPARTAMENTO', $this->getUser()->getRoles())) {
                $relatorio = $this->getDoctrine()->getRepository(AcaoOrcamentaria::class)->relatorioPorAcaoDepartamento($dataForm['nuAnoExercicio'], $this->getUser()->getCoDepartamento());
            }else{
                $relatorio = $this->getDoctrine()->getRepository(AcaoOrcamentaria::class)->relatorioPorAcao($dataForm['nuAnoExercicio']);
            }

        }elseif ($dataForm['tpRelatorio'] == 'atividade') {
            if (in_array('ROLE_DEPARTAMENTO', $this->getUser()->getRoles())) {
                $relatorio = $this->getDoctrine()->getRepository(AtividadePlanoUso::class)->relatorioAtividadeDepartamento($dataForm['nuAnoExercicio'], $this->getUser()->getCoDepartamento());
            }else{
                $relatorio = $this->getDoctrine()->getRepository(AtividadePlanoUso::class)->relatorioAtividade($dataForm['nuAnoExercicio']);
            }
        }


        if ($dataForm['tpExibicao'] == 1) {

            return $this->render('RelatorioBundle:Default:gerar.html.twig', [
                'relatorio' => $relatorio,
                'tpRelatorio' => $dataForm['tpRelatorio'],
                'nuAnoExercicio' => $dataForm['nuAnoExercicio']
            ]);
        }else{

            if ($dataForm['tpRelatorio'] == 'acaoOrcamentaria') {
                header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
                header('Content-Disposition: attachment;filename="total-acao-orcamentaria-'.date('d-m-Y').'.xlsx"');
                header('Cache-Control: max-age=0');
                $planilha = $this->gerarPlanilhaAcaoOramentaria($relatorio);
                $writer = IOFactory::createWriter($planilha, 'Xlsx');
                $writer->save('php://output');
            }elseif ($dataForm['tpRelatorio'] == 'atividade') {
                header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
                header('Content-Disposition: attachment;filename="total-atividade-'.date('d-m-Y').'.xlsx"');
                header('Cache-Control: max-age=0');
                $planilha = $this->gerarPlanilhaAtividade($relatorio);
                $writer = IOFactory::createWriter($planilha, 'Xlsx');
                $writer->save('php://output');
            }
            exit;
        }

    }

    public function gerarPlanilhaAcaoOramentaria($relatorio){

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $spreadsheet->getActiveSheet()->getDefaultRowDimension()->setRowHeight(18);

        $spreadsheet->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('F')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('G')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('H')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('I')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('J')->setAutoSize(true);
        /**
         * cabecalho
         */
        $sheet->setCellValue('A1', 'Ação');
        $sheet->setCellValue('B1', 'Plano');
        $sheet->setCellValue('C1', 'Denominação');
        $sheet->setCellValue('D1', 'Grupo de Despesa');
        $sheet->setCellValue('E1', 'Dotação Atualizada R$');
        $sheet->setCellValue('F1', 'Valor Empenhado R$');
        $sheet->setCellValue('G1', 'Valor processado CGPO R$');
        $sheet->setCellValue('H1', 'Atividades Registradadas');
        $sheet->setCellValue('I1', 'Valor Utilizado em Atividades R$');
        $sheet->setCellValue('J1', 'Saldo Disponível R$');

        $styleArray = [
            'font' => [
                'bold' => true,
            ],
            'alignment' => [
                'horizontal' => Alignment::HORIZONTAL_CENTER,
                'vertical' => Alignment::VERTICAL_CENTER
            ],
            'fill' => [
                'fillType' => Fill::FILL_SOLID,
                'rotation' => 90,
                'startColor' => [
                    'rgb' => 'DCDCDC',
                ],
                'endColor' => [
                    'rgb' => 'DCDCDC',
                ],
            ],
        ];

        $spreadsheet->getActiveSheet()->getStyle('A1:J1')->applyFromArray($styleArray);

        $contRow = 1;
        foreach ($relatorio as $r){
            $contRow++;
            $sheet->setCellValue('A' . $contRow, $r['nuAcaoOrcamentaria']);
            $spreadsheet->getActiveSheet()->getStyle('A' . $contRow)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
            $sheet->setCellValue('B' . $contRow, $r['nuPlanoOrcamentario']);
            $spreadsheet->getActiveSheet()->getStyle('B' . $contRow)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
            $sheet->setCellValue('C' . $contRow, $r['dsDenominacao']);

            $sheet->setCellValue('D' . $contRow, $r['dsTipoDespesa']);
            $spreadsheet->getActiveSheet()->getStyle('D' . $contRow)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
            $sheet->setCellValue('E' . $contRow, $r['vlAtualizado']);
            $spreadsheet->getActiveSheet()->getStyle('E' . $contRow)->getNumberFormat()->setFormatCode('#,##0.00');

            $sheet->setCellValue('F' . $contRow, $r['vlEmpenhado']);
            $spreadsheet->getActiveSheet()->getStyle('F' . $contRow)->getNumberFormat()->setFormatCode('#,##0.00');
            $sheet->setCellValue('G' . $contRow, $r['vlProcessadoCgpo']);
            $spreadsheet->getActiveSheet()->getStyle('G' . $contRow)->getNumberFormat()->setFormatCode('#,##0.00');

            $sheet->setCellValue('H' . $contRow, $r['qtAtividade']);
            $sheet->setCellValue('I' . $contRow, $r['vlAtividade']);
            $spreadsheet->getActiveSheet()->getStyle('H' . $contRow)->getNumberFormat()->setFormatCode('#,##0.00');
            $sheet->setCellValue('J' . $contRow, $r['vlSaldoAcao']);
            $spreadsheet->getActiveSheet()->getStyle('I' . $contRow)->getNumberFormat()->setFormatCode('#,##0.00');

        }

        $styleArray = [
            'borders' => [
                'allBorders' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                    'color' => ['rgb' => '000000'],
                ],
            ],
        ];

        $spreadsheet->getActiveSheet()->getStyle('A1:J'. $contRow)->applyFromArray($styleArray);

        return $spreadsheet;
    }

    public function gerarPlanilhaAtividade($relatorio){

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $spreadsheet->getActiveSheet()->getDefaultRowDimension()->setRowHeight(18);

        $spreadsheet->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('F')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('G')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('H')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('I')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('J')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('K')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('L')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('M')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('N')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('O')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('P')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('Q')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('R')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('S')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('T')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('U')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('V')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('W')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('X')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('Y')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('Z')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('AA')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('AB')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('AC')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('AD')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('AE')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('AF')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('AG')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('AH')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('AI')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('AJ')->setAutoSize(true);
        /**
         * cabecalho
         */
        $sheet->setCellValue('A1', 'Ação');
        $sheet->setCellValue('B1', 'Plano');
        $sheet->setCellValue('C1', 'Departamento Responsável');
        $sheet->setCellValue('D1', 'Denominação');
        $sheet->setCellValue('E1', 'Grupo de Despesa');
        $sheet->setCellValue('F1', 'Valor Atualizado R$');
        $sheet->setCellValue('G1', 'Valor Empenhado R$');
        $sheet->setCellValue('H1', 'Prioridade');
        $sheet->setCellValue('I1', 'Departamento da Atividade');
        $sheet->setCellValue('J1', 'Vinculo de Planejamento');
        $sheet->setCellValue('K1', 'Instrumento');
        $sheet->setCellValue('L1', 'Programa');
        $sheet->setCellValue('M1', 'Componente');
        $sheet->setCellValue('N1', 'Atividade');
        $sheet->setCellValue('O1', 'Exercício');
        $sheet->setCellValue('P1', 'Tipo de Atividade');
        $sheet->setCellValue('Q1', 'Valor total da Atividade R$');
        $sheet->setCellValue('R1', 'Valor no Ano Vigente R$');
        $sheet->setCellValue('S1', 'Valor Porcessado CGPO R$');
        $sheet->setCellValue('T1', 'UF');
        $sheet->setCellValue('U1', 'Município');
        $sheet->setCellValue('V1', 'IBGE');
        $sheet->setCellValue('W1', 'CNES');
        $sheet->setCellValue('X1', 'Proposta');
        $sheet->setCellValue('Y1', 'NUP');
        $sheet->setCellValue('Z1', 'Portaria');
        $sheet->setCellValue('AA1', 'Data da Portaria');
        $sheet->setCellValue('AB1', 'Justificativa');
        $sheet->setCellValue('AC1', 'Observação');
        $sheet->setCellValue('AD1', 'Nota de Empenho');
        $sheet->setCellValue('AE1', 'Processo da Nota de Empenho');
        $sheet->setCellValue('AF1', 'Descrição da Nota de Empenho');
        $sheet->setCellValue('AG1', 'Valor Nota da Empenho R$');
        $sheet->setCellValue('AH1', 'Data de Cadastro');
        $sheet->setCellValue('AI1', 'Data de Atualização');
        $sheet->setCellValue('AJ1', 'Registrado por');

        $styleArray = [
            'font' => [
                'bold' => true,
            ],
            'alignment' => [
                'horizontal' => Alignment::HORIZONTAL_CENTER,
                'vertical' => Alignment::VERTICAL_CENTER
            ],
            'fill' => [
                'fillType' => Fill::FILL_SOLID,
                'rotation' => 90,
                'startColor' => [
                    'rgb' => 'DCDCDC',
                ],
                'endColor' => [
                    'rgb' => 'DCDCDC',
                ],
            ],
        ];

        $spreadsheet->getActiveSheet()->getStyle('A1:AJ1')->applyFromArray($styleArray);

        $contRow = 1;
        foreach ($relatorio as $r){
            $contRow++;
            $sheet->setCellValue('A' . $contRow, $r['nuAcaoOrcamentaria']);
            $spreadsheet->getActiveSheet()->getStyle('A' . $contRow)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
            $sheet->setCellValue('B' . $contRow, $r['nuPlanoOrcamentario']);
            $spreadsheet->getActiveSheet()->getStyle('B' . $contRow)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);

            $sheet->setCellValue('C' . $contRow, $r['sgDepartamentoResp']);

            $sheet->setCellValue('D' . $contRow, $r['dsDenominacao']);

            $sheet->setCellValue('E' . $contRow, $r['dsTipoDespesa']);
            $spreadsheet->getActiveSheet()->getStyle('E' . $contRow)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);

            $sheet->setCellValue('F' . $contRow, $r['vlAtualizado']);
            $spreadsheet->getActiveSheet()->getStyle('F' . $contRow)->getNumberFormat()->setFormatCode('#,##0.00');

            $sheet->setCellValue('G' . $contRow, $r['vlEmpenhado']);
            $spreadsheet->getActiveSheet()->getStyle('G' . $contRow)->getNumberFormat()->setFormatCode('#,##0.00');

            $sheet->setCellValue('H' . $contRow, $r['nuPrioridade']);
            $spreadsheet->getActiveSheet()->getStyle('H' . $contRow)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);

            $sheet->setCellValue('I' . $contRow, $r['sgDepartamentoAtv']);
            $spreadsheet->getActiveSheet()->getStyle('I' . $contRow)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);


            $sheet->setCellValue('J' . $contRow, $r['dsVinculoPlanejamento']);
            $spreadsheet->getActiveSheet()->getStyle('H' . $contRow)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);

            $sheet->setCellValue('K' . $contRow, $r['dsTipoInstrumento']);
            $spreadsheet->getActiveSheet()->getStyle('K' . $contRow)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);

            $sheet->setCellValue('L' . $contRow, $r['dsRedePrograma']);
            $spreadsheet->getActiveSheet()->getStyle('L' . $contRow)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);

            $sheet->setCellValue('M' . $contRow, $r['dsTipoComponente']);
            $spreadsheet->getActiveSheet()->getStyle('M' . $contRow)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);

            $sheet->setCellValue('N' . $contRow, $r['dsAtividade']);
            $spreadsheet->getActiveSheet()->getStyle('N' . $contRow)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);

            $sheet->setCellValue('O' . $contRow, $r['nuAnoExercicioAtividade']);
            $spreadsheet->getActiveSheet()->getStyle('O' . $contRow)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);

            $sheet->setCellValue('P' . $contRow, $r['dsTipoAtividade']);
            $spreadsheet->getActiveSheet()->getStyle('P' . $contRow)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);

            $sheet->setCellValue('Q' . $contRow, $r['vlTotal']);
            $spreadsheet->getActiveSheet()->getStyle('Q' . $contRow)->getNumberFormat()->setFormatCode('#,##0.00');

            $sheet->setCellValue('R' . $contRow, $r['vlExecutarExercicio']);
            $spreadsheet->getActiveSheet()->getStyle('R' . $contRow)->getNumberFormat()->setFormatCode('#,##0.00');

            $sheet->setCellValue('S' . $contRow, $r['vlProcessadoCgpo']);
            $spreadsheet->getActiveSheet()->getStyle('S' . $contRow)->getNumberFormat()->setFormatCode('#,##0.00');

            $sheet->setCellValue('T' . $contRow, $r['sgUf']);
            $spreadsheet->getActiveSheet()->getStyle('T' . $contRow)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);

            $sheet->setCellValue('U' . $contRow, $r['noMunicipioAcentuado']);

            $sheet->setCellValue('V' . $contRow, $r['coMunicipioIbge']);
            $spreadsheet->getActiveSheet()->getStyle('V' . $contRow)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);

            $sheet->setCellValue('W' . $contRow, $r['coCnes']);
            $spreadsheet->getActiveSheet()->getStyle('W' . $contRow)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);


            $sheet->setCellValueExplicit('X' . $contRow,  (string)$r['nuProposta'], DataType::TYPE_STRING);
            $spreadsheet->getActiveSheet()->getStyle('X' . $contRow)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);

            $sheet->setCellValueExplicit('Y' . $contRow,  (string)$r['nuProcesso'], DataType::TYPE_STRING);
            $spreadsheet->getActiveSheet()->getStyle('Y' . $contRow)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);

            $sheet->setCellValue('Z' . $contRow, $r['nuPortaria']);
            $spreadsheet->getActiveSheet()->getStyle('Z' . $contRow)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);

            $sheet->setCellValue('AA' . $contRow, $r['dtPortaria']);
            $spreadsheet->getActiveSheet()->getStyle('AA' . $contRow)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);

            $sheet->setCellValue('AB' . $contRow, $r['dsJustificativa']);

            $sheet->setCellValue('AC' . $contRow, $r['dsObservacao']);
            
            $sheet->setCellValue('AD' . $contRow, $r['nuNotaEmpenho']);
            $spreadsheet->getActiveSheet()->getStyle('AD' . $contRow)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);

            $sheet->setCellValue('AE' . $contRow, $r['nuProcessoNotaempenho']);
            $spreadsheet->getActiveSheet()->getStyle('AE' . $contRow)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);

            $sheet->setCellValue('AF' . $contRow, $r['dsNotaEmpenho']);

            $sheet->setCellValue('AG' . $contRow, $r['vlEmpenhadoNotaempenho']);
            $spreadsheet->getActiveSheet()->getStyle('AG' . $contRow)->getNumberFormat()->setFormatCode('#,##0.00');

            $sheet->setCellValue('AH' . $contRow, $r['dtCadastro']);
            $spreadsheet->getActiveSheet()->getStyle('AH' . $contRow)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);

            $sheet->setCellValue('AI' . $contRow, $r['dtAtualizacao']);
            $spreadsheet->getActiveSheet()->getStyle('AI' . $contRow)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);

            $sheet->setCellValue('AJ' . $contRow, $r['noPessoaFisica']);

        }

        $styleArray = [
            'borders' => [
                'allBorders' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                    'color' => ['rgb' => '000000'],
                ],
            ],
        ];

        $spreadsheet->getActiveSheet()->getStyle('A1:AJ'. $contRow)->applyFromArray($styleArray);

        return $spreadsheet;
    }

}
