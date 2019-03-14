<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HistoricoPlanilha
 *
 * @ORM\Table(name="TB_HISTORICOPLANILHA_PLANOUSO", schema="DBPROPOSTASAS")
 * @ORM\Entity(repositoryClass="Admin\AdminBundle\Repository\HistoricoPlanilhaRepository")
 */
class HistoricoPlanilha
{
    /**
     * @var int
     *
     * @ORM\Column(name="CO_SEQ_HISTORPLANILHA_PLANOUSO", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="DBPROPOSTASAS.SQ_HSTCPLNLHPLS_COSEQHSTPLLPLS")
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
     * @ORM\Column(name="NO_ARQUIVO", type="string", length=150)
     */
    private $noArquivo;

    /**
     * @var string
     *
     * @ORM\Column(name="NO_PLANILHA", type="string", length=150)
     */
    private $noPlanilha;

    /**
     * @var string
     *
     * @ORM\Column(name="TP_PLANILHA", type="string", length=1)
     */
    private $tpPlanilha;

    /**
     * @var int
     *
     * @ORM\Column(name="QT_REGISTRO", type="integer")
     */
    private $qtRegistro;

    /**
     * @var int
     *
     * @ORM\Column(name="QT_REGISTRO_NOVO", type="integer")
     */
    private $qtRegistroNovo;

    /**
     * @var int
     *
     * @ORM\Column(name="QT_REGISTRO_ATUALIZADO", type="integer")
     */
    private $qtRegistroAtualizado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DT_CADASTRO", type="datetime")
     */
    private $dtCadastro;

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
     * @return HistoricoPlanilha
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
     * @return HistoricoPlanilha
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
     * Set noArquivo
     *
     * @param string $noArquivo
     *
     * @return HistoricoPlanilha
     */
    public function setNoArquivo($noArquivo)
    {
        $this->noArquivo = $noArquivo;

        return $this;
    }

    /**
     * Get noArquivo
     *
     * @return string
     */
    public function getNoArquivo()
    {
        return $this->noArquivo;
    }

    /**
     * Set noPlanilha
     *
     * @param string $noPlanilha
     *
     * @return HistoricoPlanilha
     */
    public function setNoPlanilha($noPlanilha)
    {
        $this->noPlanilha = $noPlanilha;

        return $this;
    }

    /**
     * Get noPlanilha
     *
     * @return string
     */
    public function getNoPlanilha()
    {
        return $this->noPlanilha;
    }

    /**
     * Set tpPlanilha
     *
     * @param string $tpPlanilha
     *
     * @return HistoricoPlanilha
     */
    public function setTpPlanilha($tpPlanilha)
    {
        $this->tpPlanilha = $tpPlanilha;

        return $this;
    }

    /**
     * Get tpPlanilha
     *
     * @return string
     */
    public function getTpPlanilha()
    {
        return $this->tpPlanilha;
    }

    /**
     * Set qtRegistro
     *
     * @param integer $qtRegistro
     *
     * @return HistoricoPlanilha
     */
    public function setQtRegistro($qtRegistro)
    {
        $this->qtRegistro = $qtRegistro;

        return $this;
    }

    /**
     * Get qtRegistro
     *
     * @return int
     */
    public function getQtRegistro()
    {
        return $this->qtRegistro;
    }

    /**
     * Set qtRegistroNogo
     *
     * @param integer $qtRegistroNovo
     *
     * @return HistoricoPlanilha
     */
    public function setQtRegistroNovo($qtRegistroNovo)
    {
        $this->qtRegistroNovo = $qtRegistroNovo;

        return $this;
    }

    /**
     * Get qtRegistroNovo
     *
     * @return int
     */
    public function getQtRegistroNovo()
    {
        return $this->qtRegistroNovo;
    }

    /**
     * Set qtRegistroAtualizado
     *
     * @param integer $qtRegistroAtualizado
     *
     * @return HistoricoPlanilha
     */
    public function setQtRegistroAtualizado($qtRegistroAtualizado)
    {
        $this->qtRegistroAtualizado = $qtRegistroAtualizado;

        return $this;
    }

    /**
     * Get qtRegistroAtualizado
     *
     * @return int
     */
    public function getQtRegistroAtualizado()
    {
        return $this->qtRegistroAtualizado;
    }

    /**
     * Set dtCadastro
     *
     * @param \DateTime $dtCadastro
     *
     * @return HistoricoPlanilha
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
     * Set stRegistroAtivo
     *
     * @param string $stRegistroAtivo
     *
     * @return HistoricoPlanilha
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

