<?php

namespace Planodeuso\AtividadeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AcaoOrcamentaria
 *
 * @ORM\Table(name="TB_ACAO_ORCAMENTARIA", schema="DBPROPOSTASAS")
 * @ORM\Entity(repositoryClass="Planodeuso\AtividadeBundle\Repository\AcaoOrcamentariaRepository")
 */
class AcaoOrcamentaria
{
    /**
     * @var int
     *
     * @ORM\Column(name="CO_SEQ_ACAO_ORCAMENTARIA", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="DBPROPOSTASAS.SQ_ACAOORCAMENT_COSEQACARCAMNT")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="CO_USUARIO", type="integer")
     */
    private $coUsuario;

    /**
     * @var int
     *
     * @ORM\Column(name="CO_TIPO_DESPESA", type="integer")
     */
    private $coTipoDespesa;

    /**
     * @var int
     *
     * @ORM\Column(name="CO_DEPARTAMENTO", type="integer")
     */
    private $coDepartamento;

    /**
     * @var int
     *
     * @ORM\Column(name="NU_ANO_EXERCICIO", type="integer")
     */
    private $nuAnoExercicio;

    /**
     * @var string
     *
     * @ORM\Column(name="NU_ACAO_ORCAMENTARIA", type="string", length=10)
     */
    private $nuAcaoOrcamentaria;

    /**
     * @var string
     *
     * @ORM\Column(name="NU_PLANO_ORCAMENTARIO", type="string", length=10)
     */
    private $nuPlanoOrcamentario;

    /**
     * @var string
     *
     * @ORM\Column(name="DS_DENOMINACAO", type="string", length=500)
     */
    private $dsDenominacao;

    /**
     * @var string
     *
     * @ORM\Column(name="VL_EXECUT_EXERCICIO_ANTERIOR", type="decimal", precision=20, scale=2)
     */
    private $vlExecutadoExercicioAnterior;

    /**
     * @var string
     *
     * @ORM\Column(name="VL_APROVADO", type="decimal", precision=20, scale=2)
     */
    private $vlAprovado;

    /**
     * @var string
     *
     * @ORM\Column(name="VL_BLOQUEADO", type="decimal", precision=20, scale=2)
     */
    private $vlBloqueado;

    /**
     * @var string
     *
     * @ORM\Column(name="VL_ATUALIZADO", type="decimal", precision=20, scale=2)
     */
    private $vlAtualizado;

    /**
     * @var string
     *
     * @ORM\Column(name="VL_CAPITAL", type="decimal", precision=20, scale=2)
     */
    private $vlCapital;

    /**
     * @var string
     *
     * @ORM\Column(name="VL_DISPONIVEL", type="decimal", precision=20, scale=2)
     */
    private $vlDisponivel;

    /**
     * @var string
     *
     * @ORM\Column(name="VL_DESPESA_EMPENHADA", type="decimal", precision=20, scale=2)
     */
    private $vlDespesaEmpenhada;

    /**
     * @var string
     *
     * @ORM\Column(name="VL_DEPESA_EMPENHADA_ALIQUIDAR", type="decimal", precision=20, scale=2)
     */
    private $vlDespesaEmpenhadaAliquidar;

    /**
     * @var string
     *
     * @ORM\Column(name="VL_DESPESA_LIQUIDADA", type="decimal", precision=20, scale=2)
     */
    private $vlDepesaEmpenhadaLiquidada;

    /**
     * @var string
     *
     * @ORM\Column(name="VL_DESPESA_PAGA", type="decimal", precision=20, scale=2)
     */
    private $vlDespesaPaga;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DT_CADASTRO", type="datetime")
     */
    private $dtCadastro;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DT_ATUALIZACAO", type="datetime")
     */
    private $dtAtualizacao;

    /**
     * @var string
     *
     * @ORM\Column(name="ST_REGISTRO_ATIVO", type="string", length=1)
     */
    private $stRegistroAtivo;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set coUsuario
     *
     * @param integer $coUsuario
     *
     * @return AcaoOrcamentaria
     */
    public function setCoUsuario($coUsuario)
    {
        $this->coUsuario = $coUsuario;

        return $this;
    }

    /**
     * Get coUsuario
     *
     * @return int
     */
    public function getCoUsuario()
    {
        return $this->coUsuario;
    }

    /**
     * Set coTipoDespesa
     *
     * @param integer $coTipoDespesa
     *
     * @return AcaoOrcamentaria
     */
    public function setCoTipoDespesa($coTipoDespesa)
    {
        $this->coTipoDespesa = $coTipoDespesa;

        return $this;
    }

    /**
     * Get coTipoDespesa
     *
     * @return int
     */
    public function getCoTipoDespesa()
    {
        return $this->coTipoDespesa;
    }

    /**
     * Set coDepartamento
     *
     * @param integer $coDepartamento
     *
     * @return AcaoOrcamentaria
     */
    public function setCoDepartamento($coDepartamento)
    {
        $this->coDepartamento = $coDepartamento;

        return $this;
    }

    /**
     * Get coDepartamento
     *
     * @return int
     */
    public function getCoDepartamento()
    {
        return $this->coDepartamento;
    }

    /**
     * Set nuAnoExercicio
     *
     * @param integer $nuAnoExercicio
     *
     * @return AcaoOrcamentaria
     */
    public function setNuAnoExercicio($nuAnoExercicio)
    {
        $this->nuAnoExercicio = $nuAnoExercicio;

        return $this;
    }

    /**
     * Get nuAnoExercicio
     *
     * @return int
     */
    public function getNuAnoExercicio()
    {
        return $this->nuAnoExercicio;
    }

    /**
     * Set nuAcaoOrcamentaria
     *
     * @param string $nuAcaoOrcamentaria
     *
     * @return AcaoOrcamentaria
     */
    public function setNuAcaoOrcamentaria($nuAcaoOrcamentaria)
    {
        $this->nuAcaoOrcamentaria = $nuAcaoOrcamentaria;

        return $this;
    }

    /**
     * Get nuAcaoOrcamentaria
     *
     * @return string
     */
    public function getNuAcaoOrcamentaria()
    {
        return $this->nuAcaoOrcamentaria;
    }

    /**
     * Set nuPlanoOrcamentario
     *
     * @param string $nuPlanoOrcamentario
     *
     * @return AcaoOrcamentaria
     */
    public function setNuPlanoOrcamentario($nuPlanoOrcamentario)
    {
        $this->nuPlanoOrcamentario = $nuPlanoOrcamentario;

        return $this;
    }

    /**
     * Get nuPlanoOrcamentario
     *
     * @return string
     */
    public function getNuPlanoOrcamentario()
    {
        return $this->nuPlanoOrcamentario;
    }

    /**
     * Set dsDenominacao
     *
     * @param string $dsDenominacao
     *
     * @return AcaoOrcamentaria
     */
    public function setDsDenominacao($dsDenominacao)
    {
        $this->dsDenominacao = $dsDenominacao;

        return $this;
    }

    /**
     * Get dsDenominacao
     *
     * @return string
     */
    public function getDsDenominacao()
    {
        return $this->dsDenominacao;
    }

    /**
     * Set vlExecutadoExercicioAnterior
     *
     * @param string $vlExecutadoExercicioAnterior
     *
     * @return AcaoOrcamentaria
     */
    public function setVlExecutadoExercicioAnterior($vlExecutadoExercicioAnterior)
    {
        $this->vlExecutadoExercicioAnterior = $vlExecutadoExercicioAnterior;

        return $this;
    }

    /**
     * Get vlExecutadoExercicioAnterior
     *
     * @return string
     */
    public function getVlExecutadoExercicioAnterior()
    {
        return $this->vlExecutadoExercicioAnterior;
    }

    /**
     * Set vlAprovado
     *
     * @param string $vlAprovado
     *
     * @return AcaoOrcamentaria
     */
    public function setVlAprovado($vlAprovado)
    {
        $this->vlAprovado = $vlAprovado;

        return $this;
    }

    /**
     * Get vlAprovado
     *
     * @return string
     */
    public function getVlAprovado()
    {
        return $this->vlAprovado;
    }

    /**
     * Set vlBloqueado
     *
     * @param string $vlBloqueado
     *
     * @return AcaoOrcamentaria
     */
    public function setVlBloqueado($vlBloqueado)
    {
        $this->vlBloqueado = $vlBloqueado;

        return $this;
    }

    /**
     * Get vlBloqueado
     *
     * @return string
     */
    public function getVlBloqueado()
    {
        return $this->vlBloqueado;
    }

    /**
     * Set vlAtualizado
     *
     * @param string $vlAtualizado
     *
     * @return AcaoOrcamentaria
     */
    public function setVlAtualizado($vlAtualizado)
    {
        $this->vlAtualizado = $vlAtualizado;

        return $this;
    }

    /**
     * Get vlAtualizado
     *
     * @return string
     */
    public function getVlAtualizado()
    {
        return $this->vlAtualizado;
    }

    /**
     * Set vlCapital
     *
     * @param string $vlCapital
     *
     * @return AcaoOrcamentaria
     */
    public function setVlCapital($vlCapital)
    {
        $this->vlCapital = $vlCapital;

        return $this;
    }

    /**
     * Get vlCapital
     *
     * @return string
     */
    public function getVlCapital()
    {
        return $this->vlCapital;
    }

    /**
     * Set vlDisponivel
     *
     * @param string $vlDisponivel
     *
     * @return AcaoOrcamentaria
     */
    public function setVlDisponivel($vlDisponivel)
    {
        $this->vlDisponivel = $vlDisponivel;

        return $this;
    }

    /**
     * Get vlDisponivel
     *
     * @return string
     */
    public function getVlDisponivel()
    {
        return $this->vlDisponivel;
    }

    /**
     * Set vlDespesaEmpenhada
     *
     * @param string $vlDespesaEmpenhada
     *
     * @return AcaoOrcamentaria
     */
    public function setVlDespesaEmpenhada($vlDespesaEmpenhada)
    {
        $this->vlDespesaEmpenhada = $vlDespesaEmpenhada;

        return $this;
    }

    /**
     * Get vlDespesaEmpenhada
     *
     * @return string
     */
    public function getVlDespesaEmpenhada()
    {
        return $this->vlDespesaEmpenhada;
    }

    /**
     * Set vlDespesaEmpenhadaAliquidar
     *
     * @param string $vlDespesaEmpenhadaAliquidar
     *
     * @return AcaoOrcamentaria
     */
    public function setVlDespesaEmpenhadaAliquidar($vlDespesaEmpenhadaAliquidar)
    {
        $this->vlDespesaEmpenhadaAliquidar = $vlDespesaEmpenhadaAliquidar;

        return $this;
    }

    /**
     * Get vlDespesaEmpenhadaAliquidar
     *
     * @return string
     */
    public function getVlDespesaEmpenhadaAliquidar()
    {
        return $this->vlDespesaEmpenhadaAliquidar;
    }

    /**
     * Set vlDepesaEmpenhadaLiquidada
     *
     * @param string $vlDepesaEmpenhadaLiquidada
     *
     * @return AcaoOrcamentaria
     */
    public function setVlDepesaEmpenhadaLiquidada($vlDepesaEmpenhadaLiquidada)
    {
        $this->vlDepesaEmpenhadaLiquidada = $vlDepesaEmpenhadaLiquidada;

        return $this;
    }

    /**
     * Get vlDepesaEmpenhadaLiquidada
     *
     * @return string
     */
    public function getVlDepesaEmpenhadaLiquidada()
    {
        return $this->vlDepesaEmpenhadaLiquidada;
    }

    /**
     * Set vlDespesaPaga
     *
     * @param string $vlDespesaPaga
     *
     * @return AcaoOrcamentaria
     */
    public function setVlDespesaPaga($vlDespesaPaga)
    {
        $this->vlDespesaPaga = $vlDespesaPaga;

        return $this;
    }

    /**
     * Get vlDespesaPaga
     *
     * @return string
     */
    public function getVlDespesaPaga()
    {
        return $this->vlDespesaPaga;
    }

    /**
     * Set dtCadastro
     *
     * @param \DateTime $dtCadastro
     *
     * @return AcaoOrcamentaria
     */
    public function setDtCadastro($dtCadastro)
    {
        $this->dtCadastro = $dtCadastro;

        return $this;
    }

    /**
     * Get dtCadastro
     *
     * @return \DateTime
     */
    public function getDtCadastro()
    {
        return $this->dtCadastro;
    }

    /**
     * Set dtAtualizacao
     *
     * @param \DateTime $dtAtualizacao
     *
     * @return AcaoOrcamentaria
     */
    public function setDtAtualizacao($dtAtualizacao)
    {
        $this->dtAtualizacao = $dtAtualizacao;

        return $this;
    }

    /**
     * Get dtAtualizacao
     *
     * @return \DateTime
     */
    public function getDtAtualizacao()
    {
        return $this->dtAtualizacao;
    }

    /**
     * Set stRegistroAtivo
     *
     * @param string $stRegistroAtivo
     *
     * @return AcaoOrcamentaria
     */
    public function setStRegistroAtivo($stRegistroAtivo)
    {
        $this->stRegistroAtivo = $stRegistroAtivo;

        return $this;
    }

    /**
     * Get stRegistroAtivo
     *
     * @return string
     */
    public function getStRegistroAtivo()
    {
        return $this->stRegistroAtivo;
    }

}

