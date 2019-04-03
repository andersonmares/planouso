<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * RlDepartamentoAcaoOrcamentaria
 *
 * @ORM\Table(name="RL_ACAOORCAMENTAR_DEPARTAMENTO", schema="DBPROPOSTASAS")
 * @ORM\Entity(repositoryClass="Admin\AdminBundle\Repository\RlAcaoOrcamentariaDepartamentoRepository")
 */
class RlAcaoOrcamentariaDepartamento
{

    /**
     * @ORM\ManyToOne(targetEntity="Admin\AdminBundle\Entity\AcaoOrcamentaria")
     * @ORM\JoinColumn(name="CO_ACAO_ORCAMENTARIA", referencedColumnName="CO_SEQ_ACAO_ORCAMENTARIA")
     */
    private $acaoOrcamentaria;

    public function __construct()
    {
        $this->arrayDepartamento = new ArrayCollection();
    }

    /**
     * @ORM\ManyToOne(targetEntity="Admin\AdminBundle\Entity\Departamento")
     * @ORM\JoinColumn(name="CO_DEPARTAMENTO", referencedColumnName="CO_SEQ_DEPARTAMENTO")
     */
    private $departamento;

    private $arrayDepartamento;

    /**
     * @var int
     *
     * @ORM\Column(name="CO_SEQ_ACAOORCAMENTAR_DEPRTMNT", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="DBPROPOSTASAS.SQ_ACAOORCDEP_COSEQACAOORCDEP")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="CO_ACAO_ORCAMENTARIA", type="integer")
     */
    private $coAcaoOrcamentaria;

    /**
     * @var int
     * @ORM\Column(name="CO_DEPARTAMENTO", type="integer")
     */
    private $coDepartamento;

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
     * Set coAcaoOrcamentaria
     *
     * @param integer $coAcaoOrcamentaria
     *
     * @return RlDepartamentoAcaoOrcamentaria
     */
    public function setCoAcaoOrcamentaria($coAcaoOrcamentaria)
    {
        $this->coAcaoOrcamentaria = $coAcaoOrcamentaria;

        return $this;
    }

    /**
     * Get coAcaoOrcamentaria
     *
     * @return int
     */
    public function getCoAcaoOrcamentaria()
    {
        return $this->coAcaoOrcamentaria;
    }

    /**
     * Set coDepartamento
     *
     * @param integer $coDepartamento
     *
     * @return RlDepartamentoAcaoOrcamentaria
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
     * Set dtCadastro
     *
     * @param \DateTime $dtCadastro
     *
     * @return RlDepartamentoAcaoOrcamentaria
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
     * @return RlDepartamentoAcaoOrcamentaria
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
     * @return RlDepartamentoAcaoOrcamentaria
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


    /**
     * @return mixed
     */
    public function getAcaoOrcamentaria()
    {
        return $this->acaoOrcamentaria;
    }

    /**
     * @return RlAcaoOrcamentariaDepartamento
     * @param mixed $acaoOrcamentaria
     */
    public function setAcaoOrcamentaria($acaoOrcamentaria)
    {
        $this->acaoOrcamentaria = $acaoOrcamentaria;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDepartamento()
    {
        return $this->departamento;
    }

    /**
     * @return RlAcaoOrcamentariaDepartamento
     * @param mixed $departamento
     */
    public function setDepartamento($departamento)
    {
        $this->departamento = $departamento;

        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getArrayDepartamento()
    {
        return $this->arrayDepartamento;
    }

    /**
     * @param ArrayCollection $arrayDepartamento
     */
    public function setArrayDepartamento($arrayDepartamento)
    {
        $this->arrayDepartamento[] = $arrayDepartamento;
    }
}

