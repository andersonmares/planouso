<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Instrumento
 *
 * @ORM\Table(name="TB_TIPO_INSTRUMENTO", schema="DBPROPOSTASAS")
 * @ORM\Entity(repositoryClass="Admin\AdminBundle\Repository\TipoInstrumentoRepository")
 */
class TipoInstrumento
{
    /**
     * @var int
     *
     * @ORM\Column(name="CO_SEQ_TIPO_INSTRUMENTO", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="DBPROPOSTASAS.SQ_TPINSTRUMENTO_COSEQTPINSTR")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="DS_TIPO_INSTRUMENTO", type="string", length=250)
     */
    private $dsTipoInstrumento;

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
     * Set dsTipoInstrumento
     *
     * @param string $dsTipoInstrumento
     *
     * @return TipoInstrumento
     */
    public function setDsTipoInstrumento($dsTipoInstrumento)
    {
        $this->dsTipoInstrumento = $dsTipoInstrumento;

        return $this;
    }

    /**
     * Get dsTipoInstrumento
     *
     * @return string
     */
    public function getDsTipoInstrumento()
    {
        return $this->dsTipoInstrumento;
    }

    /**
     * Set dtCadastro
     *
     * @param \DateTime $dtCadastro
     *
     * @return TipoInstrumento
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
     * @return TipoInstrumento
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
     * @return TipoInstrumento
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

