<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * AtividadePlanoUso
 *
 * @ORM\Table(name="TB_ATIVIDADE_PLANOUSO", schema="DBPROPOSTASAS")
 * @ORM\Entity(repositoryClass="Admin\AdminBundle\Repository\AtividadePlanoUsoRepository")
 */
class AtividadePlanoUso
{

    /**
     * @ORM\ManyToOne(targetEntity="Admin\AdminBundle\Entity\UF")
     * @ORM\JoinColumn(name="CO_UF_IBGE", referencedColumnName="CO_UF_IBGE")
     */
    private $uf;

    /**
     * @ORM\ManyToOne(targetEntity="Admin\AdminBundle\Entity\Municipio")
     * @ORM\JoinColumn(name="CO_MUNICIPIO_IBGE", referencedColumnName="CO_MUNICIPIO_IBGE")
     */
    private $municipio;

    /**
     * @ORM\ManyToOne(targetEntity="Admin\AdminBundle\Entity\VinculoPlanejamento")
     * @ORM\JoinColumn(name="CO_VINCULO_PLANEJAMENTO", referencedColumnName="CO_SEQ_VINCULO_PLANEJAMENTO")
     */
    private $vinculoPlanejamento;

    /**
     * @ORM\ManyToOne(targetEntity="Admin\AdminBundle\Entity\TipoInstrumento")
     * @ORM\JoinColumn(name="CO_TIPO_INSTRUMENTO", referencedColumnName="CO_SEQ_TIPO_INSTRUMENTO")
     */
    private $tipoInstrumento;

    /**
     * @ORM\ManyToOne(targetEntity="Admin\AdminBundle\Entity\StatusItem")
     * @ORM\JoinColumn(name="CO_STATUS", referencedColumnName="CO_SEQ_STATUS")
     */
    private $seqStatus;

    /**
     * @ORM\ManyToOne(targetEntity="Admin\AdminBundle\Entity\RedePrograma")
     * @ORM\JoinColumn(name="CO_REDEPROGRAMA_PLANOUSO", referencedColumnName="CO_SEQ_REDEPROGRAMA_PLANOUSO")
     */
    private $redePrograma;

    /**
     * @ORM\ManyToOne(targetEntity="Admin\AdminBundle\Entity\TipoComponente")
     * @ORM\JoinColumn(name="CO_TIPO_COMPONENTE", referencedColumnName="CO_SEQ_TIPO_COMPONENTE")
     */
    private $tipoComponente;

    /**
     * @ORM\ManyToOne(targetEntity="Admin\AdminBundle\Entity\Atividade")
     * @ORM\JoinColumn(name="CO_ATIVIDADE", referencedColumnName="CO_SEQ_ATIVIDADE")
     */
    private $atividade;

    /**
     * @ORM\ManyToOne(targetEntity="Admin\AdminBundle\Entity\TipoAtividade")
     * @ORM\JoinColumn(name="CO_TIPO_ATIVIDADE", referencedColumnName="CO_SEQ_TIPO_ATIVIDADE")
     */
    private $tipoAtividade;

    /**
     * @var int
     *
     * @ORM\Column(name="CO_SEQ_ATIVIDADE_PLANOUSO", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="DBPROPOSTASAS.SQ_ATIVIDPLANUS_COSEQATVPLANUS")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="CO_USUARIO", type="integer")
     */
    private $coUsuario;

    /**
     * @var int
     *
     * @ORM\Column(name="CO_USUARIO_PROCESSAMENTO", type="integer")
     */
    private $coUsuarioProcessamento;

    /**
     * @var int
     *
     * @ORM\Column(name="CO_DEPARTAMENTO", type="integer")
     */
    private $coDepartamento;

    /**
     * @var int
     *
     * @ORM\Column(name="CO_ACAO_ORCAMENTARIA", type="integer")
     */
    private $coAcaoOrcamentaria;

    /**
     * @var int
     *
     * @ORM\Column(name="CO_TIPO_INSTRUMENTO", type="integer")
     */
    private $coTipoInstrumento;

    /**
     * @var int
     *
     * @ORM\Column(name="CO_REDEPROGRAMA_PLANOUSO", type="integer")
     */
    private $coRedeprogramaPlanouso;

    /**
     * @var int
     *
     * @ORM\Column(name="CO_ATIVIDADE", type="integer")
     */
    private $coAtividade;

    /**
     * @var int
     *
     * @ORM\Column(name="CO_TIPO_ATIVIDADE", type="integer")
     */
    private $coTipoAtividade;

    /**
     * @var int
     *
     * @ORM\Column(name="CO_VINCULO_PLANEJAMENTO", type="integer")
     */
    private $coVinculoPlanejamento;

    /**
     * @var int
     *
     * @ORM\Column(name="CO_TIPO_COMPONENTE", type="integer")
     */
    private $coTipoComponente;

    /**
     * @var string
     *
     * @ORM\Column(name="CO_UF_IBGE", type="string", length=2)
     */
    private $coUfIbge;

    /**
     * @var string
     *
     * @ORM\Column(name="CO_MUNICIPIO_IBGE", type="string", length=6, nullable=true)
     */
    private $coMunicipioIbge;

    /**
     * @var string
     *
     * @ORM\Column(name="CO_CNES", type="string", length=7, nullable=true)
     */
    private $coCnes;

    /**
     * @var string
     *
     * @ORM\Column(name="DS_ATIVIDADE_PLANOUSO", type="string", length=500, nullable=true)
     */
    private $dsAtividadePlanouso;


    /**
     * @var int
     *
     * @ORM\Column(name="NU_ANO_EXERCICIO", type="integer")
     */
    private $nuAnoExercicio;

    /**
     * @var int
     *
     * @ORM\Column(name="NU_PRIORIDADE", type="integer")
     */
    private $nuPrioridade;

    /**
     * @var string
     *
     * @ORM\Column(name="NU_PROPOSTA", type="string", length=30)
     */
    private $nuProposta;

    /**
     * @var string
     *
     * @ORM\Column(name="NU_PROCESSO", type="string", length=30, nullable=true)
     */
    private $nuProcesso;

    /**
     * @var int
     *
     * @ORM\Column(name="NU_ANO_EXERCIO_ATIVIDADE", type="integer")
     */
    private $nuAnoExercicioAtividade;

    /**
     * @var string
     * @Assert\NotBlank()
     * @ORM\Column(name="VL_TOTAL", type="decimal", precision=20, scale=2)
     *
     */
    private $vlTotal;

    /**
     * @var float
     *
     * @ORM\Column(name="VL_EXECUTAR_EXERCICIO", type="decimal", precision=20, scale=2)
     */
    private $vlExecutarExercicio;

    /**
     * @var string
     *
     * @ORM\Column(name="DS_JUSTIFICATIVA", type="string", length=500)
     */
    private $dsJustificativa;

    /**
     * @var int
     *
     * @ORM\Column(name="NU_MES_PREVISTO_EMPENHO", type="integer")
     */
    private $nuMesPrevistoEmpenho;

    /**
     * @var string
     *
     * @ORM\Column(name="NU_PORTARIA", type="string", length=10)
     */
    private $nuPortaria;

    /**
     * @var \DateTime
     * @ORM\Column(name="DT_PORTARIA", type="date", nullable=true)
     */
    private $dtPortaria;

    /**
     * @var string
     *
     * @ORM\Column(name="VL_PROCESSADO_CGPO", type="decimal", precision=20, scale=2, nullable=true)
     */
    private $vlProcessadoCgpo;

    /**
     * @var string
     * @Assert\Length(
     *      min = 3,
     *      max = 4000,
     *      minMessage = "A observaçao deve ter pelo menos {{ limit }} caracteres",
     *      maxMessage = "A observaçao não pode ser maior do que {{ limit }} caracteres"
     * )
     * @ORM\Column(name="DS_OBSERVACAO", type="text", length=4000)
     */
    private $dsObservacao;

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
     * @ORM\Column(name="DS_IP_USUARIO", type="string")
     */
    private $dsIpUsuario;

    /**
     * @var string
     *
     * @ORM\Column(name="DS_IP_USUARIO_PROCESSAMENTO", type="string")
     */
    private $dsIpUsuarioProcessamento;


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
     * @return AtividadePlanoUso
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
     * Set coUsuarioProcessamento
     *
     * @param integer $coUsuarioProcessamento
     *
     * @return AtividadePlanoUso
     */
    public function setCoUsuarioProcessamento($coUsuarioProcessamento)
    {
        $this->coUsuarioProcessamento = $coUsuarioProcessamento;

        return $this;
    }

    /**
     * Get coUsuarioProcessamento
     *
     * @return int
     */
    public function getCoUsuarioProcessamento()
    {
        return $this->coUsuarioProcessamento;
    }

    /**
     * Set coDepartamento
     *
     * @param integer $coDepartamento
     *
     * @return AtividadePlanoUso
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
     * Set coAcaoOrcamentaria
     *
     * @param integer $coAcaoOrcamentaria
     *
     * @return AtividadePlanoUso
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
     * Set coTipoInstrumento
     *
     * @param integer $coTipoInstrumento
     *
     * @return AtividadePlanoUso
     */
    public function setCoTipoInstrumento($coTipoInstrumento)
    {
        $this->coTipoInstrumento = $coTipoInstrumento;

        return $this;
    }

    /**
     * Get coTipoInstrumento
     *
     * @return int
     */
    public function getCoTipoInstrumento()
    {
        return $this->coTipoInstrumento;
    }

    /**
     * Set coRedeprogramaPlanouso
     *
     * @param integer $coRedeprogramaPlanouso
     *
     * @return AtividadePlanoUso
     */
    public function setCoRedeprogramaPlanouso($coRedeprogramaPlanouso)
    {
        $this->coRedeprogramaPlanouso = $coRedeprogramaPlanouso;

        return $this;
    }

    /**
     * Get coRedeprogramaPlanouso
     *
     * @return int
     */
    public function getCoRedeprogramaPlanouso()
    {
        return $this->coRedeprogramaPlanouso;
    }

    /**
     * Set coAtividade
     *
     * @param integer $coAtividade
     *
     * @return AtividadePlanoUso
     */
    public function setCoAtividade($coAtividade)
    {
        $this->coAtividade = $coAtividade;

        return $this;
    }

    /**
     * Get coAtividade
     *
     * @return int
     */
    public function getCoAtividade()
    {
        return $this->coAtividade;
    }

    /**
     * Set coTipoAtividade
     *
     * @param integer $coTipoAtividade
     *
     * @return AtividadePlanoUso
     */
    public function setCoTipoAtividade($coTipoAtividade)
    {
        $this->coTipoAtividade = $coTipoAtividade;

        return $this;
    }

    /**
     * Get coTipoAtividade
     *
     * @return int
     */
    public function getCoTipoAtividade()
    {
        return $this->coTipoAtividade;
    }

    /**
     * Set coVinculoPlanejamento
     *
     * @param integer $coVinculoPlanejamento
     *
     * @return AtividadePlanoUso
     */
    public function setCoVinculoPlanejamento($coVinculoPlanejamento)
    {
        $this->coVinculoPlanejamento = $coVinculoPlanejamento;

        return $this;
    }

    /**
     * Get coVinculoPlanejamento
     *
     * @return int
     */
    public function getCoVinculoPlanejamento()
    {
        return $this->coVinculoPlanejamento;
    }

    /**
     * Set coTipoComponente
     *
     * @param integer $coTipoComponente
     *
     * @return AtividadePlanoUso
     */
    public function setCoTipoComponente($coTipoComponente)
    {
        $this->coTipoComponente = $coTipoComponente;

        return $this;
    }

    /**
     * Get coTipoComponente
     *
     * @return int
     */
    public function getCoTipoComponente()
    {
        return $this->coTipoComponente;
    }

    /**
     * Set coUfIbge
     *
     * @param string $coUfIbge
     *
     * @return AtividadePlanoUso
     */
    public function setCoUfIbge($coUfIbge)
    {
        $this->coUfIbge = $coUfIbge;

        return $this;
    }

    /**
     * Get coUfIbge
     *
     * @return string
     */
    public function getCoUfIbge()
    {
        return $this->coUfIbge;
    }

    /**
     * Set coMunicipioIbge
     *
     * @param string $coMunicipioIbge
     *
     * @return AtividadePlanoUso
     */
    public function setCoMunicipioIbge($coMunicipioIbge)
    {
        $this->coMunicipioIbge = $coMunicipioIbge;

        return $this;
    }

    /**
     * Get coMunicipioIbge
     *
     * @return string
     */
    public function getCoMunicipioIbge()
    {
        return $this->coMunicipioIbge;
    }

    /**
     * Set coCnes
     *
     * @param string $coCnes
     *
     * @return AtividadePlanoUso
     */
    public function setCoCnes($coCnes)
    {
        $this->coCnes = $coCnes;

        return $this;
    }

    /**
     * Get coCnes
     *
     * @return string
     */
    public function getCoCnes()
    {
        return $this->coCnes;
    }

    /**
     * Set coCnes
     *
     * @param string $coAtividadePlanouso
     *
     * @return AtividadePlanoUso
     */
    public function setDsAtividadePlanouso($dsAtividadePlanouso)
    {
        $this->dsAtividadePlanouso = $dsAtividadePlanouso;

        return $this;
    }

    /**
     * Get dsAtividadePlanouso
     *
     * @return string
     */
    public function getDsAtividadePlanouso()
    {
        return $this->dsAtividadePlanouso;
    }

    /**
     * Set nuAnoExercicio
     *
     * @param integer $nuAnoExercicio
     *
     * @return AtividadePlanoUso
     */
    public function setNuAnoExercicio($nuAnoExercicio)
    {
        $this->nuAnoExercicio = $nuAnoExercicio;

        return $this;
    }

    /**
     * Get nuAnoExercicio
     *
     * @return int
     */
    public function getNuAnoExercicio()
    {
        return $this->nuAnoExercicio;
    }

    /**
     * Set nuPrioridade
     *
     * @param integer $nuPrioridade
     *
     * @return AtividadePlanoUso
     */
    public function setNuPrioridade($nuPrioridade)
    {
        $this->nuPrioridade = $nuPrioridade;

        return $this;
    }

    /**
     * Get nuPrioridade
     *
     * @return int
     */
    public function getNuPrioridade()
    {
        return $this->nuPrioridade;
    }

    /**
     * Set nuProposta
     *
     * @param string $nuProposta
     *
     * @return AtividadePlanoUso
     */
    public function setNuProposta($nuProposta)
    {
        $this->nuProposta = $nuProposta;

        return $this;
    }

    /**
     * Get nuProposta
     *
     * @return string
     */
    public function getNuProposta()
    {
        return $this->nuProposta;
    }

    /**
     * Set nuProcesso
     *
     * @param string $nuProcesso
     *
     * @return AtividadePlanoUso
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
     * Set nuAnoExercicioAtividade
     *
     * @param integer $nuAnoExercicioAtividade
     *
     * @return AtividadePlanoUso
     */
    public function setNuAnoExercicioAtividade($nuAnoExercicioAtividade)
    {
        $this->nuAnoExercicioAtividade = $nuAnoExercicioAtividade;

        return $this;
    }

    /**
     * Get nuAnoExercicioAtividade
     *
     * @return int
     */
    public function getNuAnoExercicioAtividade()
    {
        return $this->nuAnoExercicioAtividade;
    }

    /**
     * Set vlTotal
     *
     * @param decimal $vlTotal
     *
     * @return AtividadePlanoUso
     */
    public function setVlTotal($vlTotal)
    {

        $this->vlTotal = $vlTotal;
        return $this;
    }

    /**
     * Get vlTotal
     *
     * @return decimal
     */
    public function getVlTotal()
    {
        return $this->vlTotal;
    }

    /**
     * Set vlExecutarExercicio
     *
     * @param float $vlExecutarExercicio
     *
     * @return AtividadePlanoUso
     */
    public function setVlExecutarExercicio($vlExecutarExercicio)
    {

        $this->vlExecutarExercicio = $vlExecutarExercicio;

        return $this;
    }

    /**
     * Get vlExecutarExercicio
     *
     * @return float
     */
    public function getVlExecutarExercicio()
    {
        return $this->vlExecutarExercicio;
    }

    /**
     * Set dsJustificativa
     *
     * @param string $dsJustificativa
     *
     * @return AtividadePlanoUso
     */
    public function setDsJustificativa($dsJustificativa)
    {
        $this->dsJustificativa = $dsJustificativa;

        return $this;
    }

    /**
     * Get dsJustificativa
     *
     * @return string
     */
    public function getDsJustificativa()
    {
        return $this->dsJustificativa;
    }

    /**
     * Set nuMesPrevistoEmpenho
     *
     * @param integer $nuMesPrevistoEmpenho
     *
     * @return AtividadePlanoUso
     */
    public function setNuMesPrevistoEmpenho($nuMesPrevistoEmpenho)
    {
        $this->nuMesPrevistoEmpenho = $nuMesPrevistoEmpenho;

        return $this;
    }

    /**
     * Get nuMesPrevistoEmpenho
     *
     * @return int
     */
    public function getNuMesPrevistoEmpenho()
    {
        return $this->nuMesPrevistoEmpenho;
    }

    /**
     * Set nuPortaria
     *
     * @param string $nuPortaria
     *
     * @return AtividadePlanoUso
     */
    public function setNuPortaria($nuPortaria)
    {
        $this->nuPortaria = $nuPortaria;

        return $this;
    }

    /**
     * Get nuPortaria
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
     * @return AtividadePlanoUso
     */
    public function setDtPortaria($dtPortaria)
    {
        //$this->dtPortaria = \DateTime::createFromFormat('d/m/Y', $dtPortaria);
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
     * Set vlProcessadoCgpo
     *
     * @param string $vlProcessadoCgpo
     *
     * @return AtividadePlanoUso
     */
    public function setVlProcessadoCgpo($vlProcessadoCgpo)
    {
        $this->vlProcessadoCgpo = $vlProcessadoCgpo;
        return $this;
    }

    /**
     * Get vlProcessadoCgpo
     *
     * @return string
     */
    public function getVlProcessadoCgpo()
    {
        return $this->vlProcessadoCgpo;
    }

    /**
     * Set dsObservacao
     *
     * @param string $dsObservacao
     *
     * @return AtividadePlanoUso
     */
    public function setDsObservacao($dsObservacao)
    {
        $this->dsObservacao = $dsObservacao;

        return $this;
    }

    /**
     * Get dsObservacao
     *
     * @return string
     */
    public function getDsObservacao()
    {
        return $this->dsObservacao;
    }

    /**
     * Set dtCadastro
     *
     * @param \DateTime $dtCadastro
     *
     * @return AtividadePlanoUso
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
     * @return AtividadePlanoUso
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
     * @return string
     */
    public function getDsIpUsuario()
    {
        return $this->dsIpUsuario;
    }

    /**
     * @param string $dsIpUsuario
     * @return AtividadePlanoUso
     */
    public function setDsIpUsuario($dsIpUsuario)
    {
        $this->dsIpUsuario = $dsIpUsuario;
        return $this;
    }

    /**
     * @return string
     */
    public function getDsIpUsuarioProcessamento()
    {
        return $this->dsIpUsuarioProcessamento;
    }

    /**
     * @param string $dsIpUsuarioProcessamento
     * @return AtividadePlanoUso
     */
    public function setDsIpUsuarioProcessamento($dsIpUsuarioProcessamento)
    {
        $this->dsIpUsuarioProcessamento = $dsIpUsuarioProcessamento;
        return $this;
    }

    /**
     * Set stRegistroAtivo
     *
     * @param string $stRegistroAtivo
     *
     * @return AtividadePlanoUso
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
     *
     * @return mixed
     */
    public function getUf()
    {
        return $this->uf;
    }

    /**
     * @param mixed $uf
     * @return AtividadePlanoUso
     */
    public function setUf($uf)
    {
        $this->uf = $uf;
        return $this;
    }

    /**
     *
     * @return mixed
     */
    public function getMunicipio()
    {
        return $this->municipio;
    }

    /**
     * @param mixed $municipio
     * @return AtividadePlanoUso
     */
    public function setMunicipio($municipio)
    {
        $this->municipio = $municipio;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getVinculoPlanejamento()
    {
        return $this->vinculoPlanejamento;
    }

    /**
     * @param mixed $vinculoPlanejamento
     * @return AtividadePlanoUso
     */
    public function setVinculoPlanejamento($vinculoPlanejamento)
    {
        $this->vinculoPlanejamento = $vinculoPlanejamento;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTipoInstrumento()
    {
        return $this->tipoInstrumento;
    }

    /**
     * @param mixed $tipoInstrumento
     * @return AtividadePlanoUso
     */
    public function setTipoInstrumento($tipoInstrumento)
    {
        $this->tipoInstrumento = $tipoInstrumento;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRedePrograma()
    {
        return $this->redePrograma;
    }

    /**
     * @param mixed $redePrograma
     * @return AtividadePlanoUso
     */
    public function setRedePrograma($redePrograma)
    {
        $this->redePrograma = $redePrograma;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTipoComponente()
    {
        return $this->tipoComponente;
    }

    /**
     * @param mixed $tipoComponente
     * @return AtividadePlanoUso
     */
    public function setTipoComponente($tipoComponente)
    {
        $this->tipoComponente = $tipoComponente;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAtividade()
    {
        return $this->atividade;
    }

    /**
     * @param mixed $atividade
     * @return AtividadePlanoUso
     */
    public function setAtividade($atividade)
    {
        $this->atividade = $atividade;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTipoAtividade()
    {
        return $this->tipoAtividade;
    }

    /**
     * @param mixed $tipoAtividade
     * @return AtividadePlanoUso
     */
    public function setTipoAtividade($tipoAtividade)
    {
        $this->tipoAtividade = $tipoAtividade;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSeqStatus()
    {
        return $this->seqStatus;
    }

    /**
     * @param mixed $seqStatus
     */
    public function setSeqStatus($seqStatus)
    {
        $this->seqStatus = $seqStatus;
    }
}
