<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RedePrograma
 *
 * @ORM\Table(name="TB_REDEPROGRAMA_PLANOUSO", schema="DBPROPOSTASAS")
 * @ORM\Entity(repositoryClass="Admin\AdminBundle\Repository\RedeProgramaRepository")
 */
class RedePrograma
{

    /**
     * @ORM\OneToOne(targetEntity="Admin\AdminBundle\Entity\Departamento")
     * @ORM\JoinColumn(name="CO_DEPARTAMENTO", referencedColumnName="CO_SEQ_DEPARTAMENTO")
     */
    private $departamento;

    /**
     * @var int
     *
     * @ORM\Column(name="CO_SEQ_REDEPROGRAMA_PLANOUSO", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="DBPROPOSTASAS.SQ_REDPRGRMPLN_COSEQRDPRGRMPLN")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="CO_DEPARTAMENTO", type="integer")
     */
    private $coDepartamento;

    /**
     * @var string
     *
     * @ORM\Column(name="DS_REDEPROGRAMA_PLANOUSO", type="string", length=250)
     */
    private $dsRedePrograma;

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
     * @return mixed
     */
    public function getDepartamento()
    {
        return $this->departamento;
    }

    /**
     * @param mixed $departamento
     * @return RedePrograma
     */
    public function setDepartamento($departamento)
    {
        $this->departamento = $departamento;

        return $this;
    }

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
     * @return int
     */
    public function getCoDepartamento()
    {
        return $this->coDepartamento;
    }

    /**
     * @param int $coDepartamento
     * @return RedePrograma
     */
    public function setCoDepartamento($coDepartamento)
    {
        $this->coDepartamento = $coDepartamento;

        return $this;
    }


    /**
     * Set dsRedePrograma
     *
     * @param string $dsRedePrograma
     *
     * @return RedePrograma
     */
    public function setDsRedePrograma($dsRedePrograma)
    {
        $this->dsRedePrograma = $dsRedePrograma;

        return $this;
    }

    /**
     * Get dsRedePrograma
     *
     * @return string
     */
    public function getDsRedePrograma()
    {
        return $this->dsRedePrograma;
    }

    /**
     * Set dtCadastro
     *
     * @param \DateTime $dtCadastro
     *
     * @return RedePrograma
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
     * @return RedePrograma
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
     * @return RedePrograma
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

