<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NotaEmpenho
 *
 * @ORM\Table(name="TB_NOTAEMPENHO_PLANOUSO", schema="DBPROPOSTASAS")
 * @ORM\Entity(repositoryClass="Admin\AdminBundle\Repository\NotaEmpenhoRepository")
 */
class NotaEmpenho
{
    /**
     * @var int
     *
     * @ORM\Column(name="CO_SEQ_NOTAEMPENHO_PLANOUSO", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="DBPROPOSTASAS.SQ_NOTAEMPPLAN_COSEQNOTAEMPPLN")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="CO_USUARIO", type="integer")
     */
    private $coUsuario;

    /**
     * @var string
     *
     * @ORM\Column(name="NU_ANO_EXERCICIO", type="integer", length=4)
     */
    private $nuAnoExercicio;

    /**
     * @var string
     *
     * @ORM\Column(name="NU_NOTA_EMPENHO", type="string", length=30)
     */
    private $nuNotaEmpenho;

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
     * @ORM\Column(name="NU_PROCESSO", type="string", length=30)
     */
    private $nuProcesso;

    /**
     * @var string
     *
     * @ORM\Column(name="DS_NOTA_EMPENHO", type="string", length=1000)
     */
    private $dsNotaEmpenho;

    /**
     * @var string
     *
     * @ORM\Column(name="VL_EMPENHADO", type="decimal", precision=20, scale=2)
     */
    private $vlEmpenhado;

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
     * @return NotaEmpenho
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
     * Set nuAnoExercicio
     *
     * @param string $nuAnoExercicio
     *
     * @return NotaEmpenho
     */
    public function setNuAnoExercicio($nuAnoExercicio)
    {
        $this->nuAnoExercicio = $nuAnoExercicio;

        return $this;
    }

    /**
     * Get nuAnoExercicio
     *
     * @return string
     */
    public function getNuAnoExercicio()
    {
        return $this->nuAnoExercicio;
    }

    /**
     * Set nuNotaEmpenho
     *
     * @param string $nuNotaEmpenho
     *
     * @return NotaEmpenho
     */
    public function setNuNotaEmpenho($nuNotaEmpenho)
    {
        $this->nuNotaEmpenho = $nuNotaEmpenho;

        return $this;
    }

    /**
     * Get nuNotaEmpenho
     *
     * @return string
     */
    public function getNuNotaEmpenho()
    {
        return $this->nuNotaEmpenho;
    }

    /**
     * Set nuAcaoOrcamentaria
     *
     * @param string $nuAcaoOrcamentaria
     *
     * @return NotaEmpenho
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
     * Set nuPlanoOracamentario
     *
     * @param string $nuPlanoOracamentario
     *
     * @return NotaEmpenho
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
     * Set nuProcesso
     *
     * @param string $nuProcesso
     *
     * @return NotaEmpenho
     */
    public function setNuProcesso($nuProcesso)
    {
        $this->nuProcesso = $nuProcesso;

        return $this;
    }

    /**
     * Get nuProcesso
     *
     * @return string
     */
    public function getNuProcesso()
    {
        return $this->nuProcesso;
    }

    /**
     * Set dsNotaEmpenho
     *
     * @param string $dsNotaEmpenho
     *
     * @return NotaEmpenho
     */
    public function setDsNotaEmpenho($dsNotaEmpenho)
    {
        $this->dsNotaEmpenho = $dsNotaEmpenho;

        return $this;
    }

    /**
     * Get dsNotaEmpenho
     *
     * @return string
     */
    public function getDsNotaEmpenho()
    {
        return $this->dsNotaEmpenho;
    }

    /**
     * Set vlEmpenho
     *
     * @param string $vlEmpenhado
     *
     * @return NotaEmpenho
     */
    public function setVlEmpenhado($vlEmpenhado)
    {
        $this->vlEmpenhado = $vlEmpenhado;

        return $this;
    }

    /**
     * Get vlEmpenho
     *
     * @return string
     */
    public function getVlEmpenhado()
    {
        return $this->vlEmpenhado;
    }

    /**
     * Set dtCadastro
     *
     * @param \DateTime $dtCadastro
     *
     * @return NotaEmpenho
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
     * @return NotaEmpenho
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
     * @return NotaEmpenho
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

