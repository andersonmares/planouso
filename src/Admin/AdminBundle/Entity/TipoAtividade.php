<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoAtividade
 *
 * @ORM\Table(name="TB_TIPO_ATIVIDADE", schema="DBPROPOSTASAS")
 * @ORM\Entity(repositoryClass="Admin\AdminBundle\Repository\TipoAtividadeRepository")
 */
class TipoAtividade
{
    /**
     * @var int
     *
     * @ORM\Column(name="CO_SEQ_TIPO_ATIVIDADE", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="DBPROPOSTASAS.SQ_TPATIVIDADE_COSEQTPATIVIDAD")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="DS_TIPO_ATIVIDADE", type="string", length=250)
     */
    private $dsTipoAtividade;

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
     * Set dsTipoAtividade
     *
     * @param string $dsTipoAtividade
     *
     * @return TipoAtividade
     */
    public function setDsTipoAtividade($dsTipoAtividade)
    {
        $this->dsTipoAtividade = $dsTipoAtividade;

        return $this;
    }

    /**
     * Get dsTipoAtividade
     *
     * @return string
     */
    public function getDsTipoAtividade()
    {
        return $this->dsTipoAtividade;
    }

    /**
     * Set dtCadastro
     *
     * @param \DateTime $dtCadastro
     *
     * @return TipoAtividade
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
     * @return TipoAtividade
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
     * @return TipoAtividade
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

