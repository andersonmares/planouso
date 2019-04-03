<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RlNotaEmpenhoAtividadePlanouso
 *
 * @ORM\Table(name="RL_NOTAEMPENPLAN_ATIVIDADEPLAN", schema="DBPROPOSTASAS")
 * @ORM\Entity(repositoryClass="Admin\AdminBundle\Repository\RlNotaEmpenhoAtividadePlanousoRepository")
 */
class RlNotaEmpenhoAtividadePlanouso
{

    /**
     * @var int
     *
     * @ORM\Column(name="CO_SEQ_NOTAEMPENPLAN_ATIVIDPLN", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="DBPROPOSTASAS.SQ_RLNTEMPPLNAT_COSEQNTMPNPLAT")
     */
    private $id;


    /**
     * @var int
     *
     * @ORM\Column(name="CO_NOTAEMPENHO_PLANOUSO", type="integer")
     */
    private $coNotaEmpenhoPlanouso;

    /**
     * @var int
     *
     * @ORM\Column(name="CO_ATIVIDADE_PLANOUSO", type="integer")
     */
    private $coAtividadePlanouso;

    /**
     * @var int
     *
     * @ORM\Column(name="CO_USUARIO", type="integer")
     */
    private $coUsuario;

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
     * Set coNotaEmpenhoPlanouso
     *
     * @param integer $coNotaEmpenhoPlanouso
     *
     * @return RlNotaEmpenhoAtividadePlanouso
     */
    public function setCoNotaEmpenhoPlanouso($coNotaEmpenhoPlanouso)
    {
        $this->coNotaEmpenhoPlanouso = $coNotaEmpenhoPlanouso;

        return $this;
    }

    /**
     * Get coNotaEmpenhoPlanouso
     *
     * @return int
     */
    public function getCoNotaEmpenhoPlanouso()
    {
        return $this->coNotaEmpenhoPlanouso;
    }

    /**
     * Set coAtividadePlanouso
     *
     * @param integer $coAtividadePlanouso
     *
     * @return RlNotaEmpenhoAtividadePlanouso
     */
    public function setCoAtividadePlanouso($coAtividadePlanouso)
    {
        $this->coAtividadePlanouso = $coAtividadePlanouso;

        return $this;
    }


    /**
     * Get coAtividadePlanouso
     *
     * @return int
     */
    public function getCoAtividadePlanouso()
    {
        return $this->coAtividadePlanouso;
    }

    /**
     * Set coUsuario
     *
     * @param integer $coUsuario
     *
     * @return RlNotaEmpenhoAtividadePlanouso
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
     * Set dtCadastro
     *
     * @param \DateTime $dtCadastro
     *
     * @return RlNotaEmpenhoAtividadePlanouso
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
     * @return RlNotaEmpenhoAtividadePlanouso
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
     * @return RlNotaEmpenhoAtividadePlanouso
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

