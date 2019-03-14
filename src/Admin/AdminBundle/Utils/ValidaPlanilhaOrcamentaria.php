<?php
namespace Admin\AdminBundle\Utils;

class ValidaPlanilhaOrcamentaria {

    private $planilha;
    private $sgDepartamento = array();
    private $tipoDespesa;
    private $isValid = true;
    private $erros = array(
        'layout'        => array('msg' => 'Layout de planilha invalida. A planilha deve ter 14 colunas.', 'line' => true),
        'departamento'  => array ('msg' => 'Departamento Inexistente! Verifique a coluna A', 'line' => ''),
        'tipoDespesa'   => array ('msg' =>'Categoria inesistente! Verifique a coluna E:', 'line' => ''),
        'acao'          => array ('msg' =>'Ação inválida, o valor deve ter 4 caracteres! Verifique a coluna B:', 'line' => ''),
        'PO'            => array ('msg' =>'Plano Orçamentário inválido, o valor deve ter 4 caracteres! Verifique a coluna C:', 'line' => ''),
        'dsAcao'        => array ('msg' =>'A descrição da Ação Orçamentária deve ser informada! Verifique a coluna D:', 'line' => ''),
        'vlAprovado'    => array ('msg' => 'O valor da Dotação Inicial está inválido! Verifique na coluna I se o valor está no formato 999.999,99:', 'line' => ''),
        'vlAtualizado'  => array ('msg' => 'Valor da Dotação Atualizada está inválido! Verifique a coluna J se o valor está no formato 999.999,99:', 'line' => ''),
        'vlEmpenhado'   => array ('msg' => 'Valor de Despesas Empenhadas inválido! Verifique a coluna L se o valor está no formato 999.999,99:', 'line' => ''),
        'vlLiquidado'   => array ('msg' => 'Valor de Despesas Liquidadas inválido! Verifique a coluna M se o valor está no formato 999.999,99:', 'line' => ''),
        'vlPago'        => array ('msg' => 'Valor de Despesas Pagas inválido! Verifique a coluna N se o valor está no formato 999.999,99:', 'line' => ''),
    );


    public function __construct($planilha, $departamento, $tipoDespesa)
    {
        $this->planilha = $planilha;
        $this->setSgDepartamento($departamento);
        $this->setTipoDespesa($tipoDespesa);
    }

    public function validar(){
        $line = 0;
        $this->validacao($this->planilha, 'layout', true);
        if ($this->isValid) {
            foreach ($this->planilha as $data) {
                $line++;
                if ($line >= 6) {
                    $this->validacao($data['A'], 'departamento', $line);
                    $this->validacao($data['E'], 'tipoDespesa', $line);
                    $this->validacao($data['B'], 'acao', $line);
                    $this->validacao($data['C'], 'PO', $line);
                    $this->validacao($data['D'], 'dsAcao', $line);
                    $this->validacao($data['I'], 'vlAprovado', $line);
                    $this->validacao($data['J'], 'vlAtualizado', $line);
                    $this->validacao($data['L'], 'vlEmpenhado', $line);
                    $this->validacao($data['M'], 'vlLiquidado', $line);
                    $this->validacao($data['N'], 'vlPago', $line);

                }
            }
        }
        return $this->isValid;
    }

    public function validacao($value, $tpValidacao, $line){
        $valida = true;
        switch ($tpValidacao){
            case 'layout':
                    $valida = ((count(array_keys($value[1]))) == 14);
                break;
            case 'departamento':
                    $valida = (in_array($value, $this->sgDepartamento));
                break;
            case 'tipoDespesa':
                    $valida = (in_array($value, $this->tipoDespesa));
                break;
            case 'dsAcao':
                    $valida = (!is_null($value) || $value != "");
                break;
            case 'acao':
            case 'PO':
                    $valida = (strlen($value) == 4);
                break;
            case 'vlAprovado':
            case 'vlAtualizado':
            case 'vlEmpenhado':
            case 'vlLiquidado':
            case 'vlPago':
                    $valida =  (is_null($value))? true : is_numeric($value) ? true :  false;
                break;
        }

        if (!$valida){
            if (is_bool($line)) {
                $this->erros[$tpValidacao]['line'] = false;
            }else{
                $this->erros[$tpValidacao]['line'] .= $line.', ';
            }
            $this->isValid = false;
        }
        return $valida;
    }

    public function setSgDepartamento($departamento){
        $this->sgDepartamento = array_column ($departamento, 'sgDepartamento');
    }

    public function setTipoDespesa($tipoDespesa){
        $this->tipoDespesa = array_column ($tipoDespesa, 'id');
    }

    public function getErros(){
        $msg = '';
        if (!$this->isValid){
            $msg = '<div class="box box-danger box-solid"><div class="box-header with-border"><h3 class="box-title"><span class="fa fa-times"></span> Os sequintes erros foram encontrados ao tentar importar o arquivo:</h3></div><div class="box-body"><ul>';
            foreach ($this->erros as $erros){
                if ($erros['line'] === false){
                    $msg .= '<li><strong>' . $erros['msg'] . '</strong></li>';
                }elseif (!is_bool($erros['line']) && $erros['line'] != '') {
                    $msg .= '<li><strong>' . $erros['msg'] . '</strong><ul><li>Linhas: ' . substr($erros['line'], 0, -2) . '</li></ul></li>';
                }
            }
            $msg .= '</ul></div>';
        }
        return $msg;
    }

}