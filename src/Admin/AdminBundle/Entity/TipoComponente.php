<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoComponente
 *
 * @ORM\Table(name="TB_TIPO_COMPONENTE", schema="DBPROPOSTASAS")
 * @ORM\Entity(repositoryClass="Admin\AdminBundle\Repository\TipoComponenteRepository")
 */
class TipoComponente
{
    /**
     * @var int
     *
     * @ORM\Column(name="CO_SEQ_TIPO_COMPONENTE", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="DBPROPOSTASAS.SQ_TIPOCOMPONENT_COSEQTPCMPNNT")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="DS_TIPO_COMPONENTE", type="string", length=250)
     */
    private $dsTipoComponente;

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
     * Set dsTipoComponente
     *
     * @param string $dsTipoComponente
     *
     * @return TipoComponente
     */
    public function setDsTipoComponente($dsTipoComponente)
    {
        $this->dsTipoComponente = $dsTipoComponente;

        return $this;
    }

    /**
     * Get dsTipoComponente
     *
     * @return string
     */
    public function getDsTipoComponente()
    {
        return $this->dsTipoComponente;
    }

    /**
     * Set dtCadastro
     *
     * @param \DateTime $dtCadastro
     *
     * @return TipoComponente
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
     * @return TipoComponente
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
     * @return TipoComponente
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

