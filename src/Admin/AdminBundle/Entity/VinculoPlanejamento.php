<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VinculoPlanejamento
 *
 * @ORM\Table(name="TB_VINCULO_PLANEJAMENTO", schema="DBPROPOSTASAS")
 * @ORM\Entity(repositoryClass="Admin\AdminBundle\Repository\VinculoPlanejamentoRepository")
 */
class VinculoPlanejamento
{
    /**
     * @var int
     *
     * @ORM\Column(name="CO_SEQ_VINCULO_PLANEJAMENTO", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="DBPROPOSTASAS.SQ_VINCULPLANEJMNT_COSEQVNLPLN")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="DS_VINCULO_PLANEJAMENTO", type="string", length=250)
     */
    private $dsVinculoPlanejamento;

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
     * Set dsVinculoPlanejamento
     *
     * @param string $dsVinculoPlanejamento
     *
     * @return VinculoPlanejamento
     */
    public function setDsVinculoPlanejamento($dsVinculoPlanejamento)
    {
        $this->dsVinculoPlanejamento = $dsVinculoPlanejamento;

        return $this;
    }

    /**
     * Get dsVinculoPlanejamento
     *
     * @return string
     */
    public function getDsVinculoPlanejamento()
    {
        return $this->dsVinculoPlanejamento;
    }

    /**
     * Set dtCadastro
     *
     * @param \DateTime $dtCadastro
     *
     * @return VinculoPlanejamento
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
     * @return VinculoPlanejamento
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
     * @return VinculoPlanejamento
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

