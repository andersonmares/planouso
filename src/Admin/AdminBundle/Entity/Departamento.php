<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Departamento
 *
 * @ORM\Table(name="TB_DEPARTAMENTO", schema="DBPROPOSTASAS")
 * @ORM\Entity(repositoryClass="Admin\AdminBundle\Repository\DepartamentoRepository")
 */
class Departamento
{
    /**
     * @var int
     *
     * @ORM\Column(name="CO_SEQ_DEPARTAMENTO", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="DBPROPOSTASAS.SQ_DEPARTAMENTO_COSEQDEPARTAME")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="DS_DEPARTAMENTO", type="string", length=250)
     */
    private $dsDepartamento;

    /**
     * @var string
     *
     * @ORM\Column(name="SG_DEPARTAMENTO", type="string", length=250)
     */
    private $sgDepartamento;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DT_CADASTRO", type="datetime", nullable=true)
     */
    private $dtCadastro;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DT_ATUALIZACAO", type="datetime", nullable=true)
     */
    private $dtAtualizacao;

    /**
     * @var string
     *
     * @ORM\Column(name="ST_REGISTRO_ATIVO", type="string", length=1, nullable=true)
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
     * Set dsDepartamento
     *
     * @param string $dsDepartamento
     *
     * @return Departamento
     */
    public function setDsDepartamento($dsDepartamento)
    {
        $this->dsDepartamento = $dsDepartamento;

        return $this;
    }

    /**
     * Get dsDepartamento
     *
     * @return string
     */
    public function getDsDepartamento()
    {
        return $this->dsDepartamento;
    }

    /**
     * Set sgDepartamento
     *
     * @param string $sgDepartamento
     *
     * @return Departamento
     */
    public function setSgDepartamento($sgDepartamento)
    {
        $this->sgDepartamento = mb_strtoupper($sgDepartamento);

        return $this;
    }

    /**
     * Get sgDepartamento
     *
     * @return string
     */
    public function getSgDepartamento()
    {
        return $this->sgDepartamento;
    }

    /**
     * Set dtCadastro
     *
     * @param \DateTime $dtCadastro
     *
     * @return Departamento
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
     * @return Departamento
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
     * @return Departamento
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

