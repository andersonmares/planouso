<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProcessamentoAtividade
 *
 * @ORM\Table(name="TB_PROCESSAMENTO_ATIVIDPLANUSO", schema="DBPROPOSTASAS")
 * @ORM\Entity(repositoryClass="Admin\AdminBundle\Repository\ProcessamentoAtividadeRepository")
 */
class ProcessamentoAtividade
{
    /**
     * @var int
     *
     * @ORM\Column(name="CO_SEQ_PROCESSMNT_ATIVDPLANUSO", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="DBPROPOSTASAS.SQ_PRCATVDPLNS_COSEQPRCATVPLNS")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="CO_ATIVIDADE_PLANOUSO", type="integer")
     */
    private $coAtividadePlanoUso;

    /**
     * @var int
     *
     * @ORM\Column(name="CO_USUARIO", type="integer")
     */
    private $coUsuario;

    /**
     * @var string
     *
     * @ORM\Column(name="NU_PROCESSO", type="datetime")
     */
    private $nuProcesso;


    /**
     * @var string
     *
     * @ORM\Column(name="NU_PORTARIA", type="string")
     */
    private $nuPortaria;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DT_PORTARIA", type="datetime")
     */
    private $dtPortaria;

    /**
     * @var float
     *
     * @ORM\Column(name="VL_PROCESSAMENTO", type="float")
     */
    private $vlProcessamento;

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
     * Set coAtividadePlanoUso
     *
     * @param integer $coAtividadePlanoUso
     *
     * @return ProcessamentoAtividade
     */
    public function setCoAtividadePlanoUso($coAtividadePlanoUso)
    {
        $this->coAtividadePlanoUso = $coAtividadePlanoUso;

        return $this;
    }

    /**
     * Get coAtividadePlanoUso
     *
     * @return int
     */
    public function getCoAtividadePlanoUso()
    {
        return $this->coAtividadePlanoUso;
    }

    /**
     * Set coUsuario
     *
     * @param integer $coUsuario
     *
     * @return ProcessamentoAtividade
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
     * Set nuProcesso
     *
     * @param string $nuProcesso
     *
     * @return ProcessamentoAtividade
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
     * Set nuPortaria
     *
     * @param string $nuPortaria
     *
     * @return ProcessamentoAtividade
     */
    public function setNuPortaria($nuPortaria)
    {
        $this->nuPortaria = $nuPortaria;

        return $this;
    }

    /**
     * Get nuProcesso
     *
     * @return string
     */
    public function getNuPortaria()
    {
        return $this->nuPortaria;
    }


    /**
     * Set dtPortaria
     *
     * @param \DateTime $dtPortaria
     *
     * @return ProcessamentoAtividade
     */
    public function setDtPortaria($dtPortaria)
    {
        $this->dtPortaria = $dtPortaria;

        return $this;
    }

    /**
     * Get dtPortaria
     *
     * @return \DateTime
     */
    public function getDtPortaria()
    {
        return $this->dtPortaria;
    }

    /**
     * Set vlProcessamento
     *
     * @param float $vlProcessamento
     *
     * @return ProcessamentoAtividade
     */
    public function setVlProcessamento($vlProcessamento)
    {
        $this->vlProcessamento = $vlProcessamento;

        return $this;
    }

    /**
     * Get vlProcessamento
     *
     * @return float
     */
    public function getVlProcessamento()
    {
        return $this->vlProcessamento;
    }

    /**
     * Set dtCadastro
     *
     * @param \DateTime $dtCadastro
     *
     * @return ProcessamentoAtividade
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
     * @return ProcessamentoAtividade
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
     * @return ProcessamentoAtividade
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

