<?php
namespace Admin\AdminBundle\Utils;

class ValidaPlanilhaNotaEmpenho {

    private $planilha;
    private $isValid = true;
    private $erros = array(
        'layout'        => array('msg' => 'Layout de planilha invalida. A planilha deve ter 7 colunas.', 'line' => true),
        'acao'          => array ('msg' =>'Ação inválida, o valor deve ter 4 caracteres! Verifique a coluna C:', 'line' => ''),
        'PO'            => array ('msg' =>'Plano Orçamentário inválido, o valor deve ter 4 caracteres! Verifique a coluna D:', 'line' => ''),
        'notaEmpenho'   => array ('msg' =>'Nota de Empenho inválida, o número da nota de empenho deve ter 23 caracteres! Verifique a coluna F', 'line' => ''),
        'vlEmpenhado'   => array ('msg' => 'Valor de Despesas Empenhadas inválido! Verifique a coluna H:', 'line' => ''),
    );


    public function __construct($planilha)
    {
        $this->planilha = $planilha;
    }

    public function validar(){
        $line = 0;
        $this->validacao($this->planilha, 'layout', true);
        if ($this->isValid) {
            foreach ($this->planilha as $data) {
                $line++;
                if ($line >= 7) {
                    $this->validacao($data['C'], 'acao', $line);
                    $this->validacao($data['D'], 'PO', $line);
                    $this->validacao($data['F'], 'notaEmpenho', $line);
                    $this->validacao($data['H'], 'vlEmpenhado', $line);
                }
            }
        }
        return $this->isValid;
    }

    public function validacao($value, $tpValidacao, $line){
        $valida = true;
        switch ($tpValidacao){
            case 'layout':
                    $valida = ((count(array_keys($value[1]))) == 8);
                break;
            case 'acao':
            case 'PO':
                    $valida = (strlen($value) == 4);
                break;
            case 'notaEmpenho':
                $valida = (strlen($value) == 23);
                break;
            case 'vlEmpenhado':
                    $valida =  (is_null($value))? true : is_numeric($value)? true :  false;
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