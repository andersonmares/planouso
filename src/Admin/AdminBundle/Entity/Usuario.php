<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 *
 * @ORM\Table(name="TB_USUARIO", schema="DBPROPOSTASAS")
 * @ORM\Entity(repositoryClass="Admin\AdminBundle\Repository\UsuarioRepository")
 */
class Usuario
{
    /**
     * @var int
     *
     * @ORM\Column(name="CO_SEQ_USUARIO", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="DBPROPOSTASAS.SQ_USUARIO_COSEQUSUARIO")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity="Admin\AdminBundle\Entity\PerfilAcesso")
     * @ORM\JoinColumn(name="CO_PERFIL_ACESSO", referencedColumnName="CO_SEQ_PERFIL_ACESSO")
     */
    private $perfil;


    /**
     * @ORM\OneToOne(targetEntity="Admin\AdminBundle\Entity\Departamento")
     * @ORM\JoinColumn(name="CO_DEPARTAMENTO", referencedColumnName="CO_SEQ_DEPARTAMENTO")
     */
    private $departamento;

    /**
     * @var string
     *
     * @ORM\Column(name="DS_USUARIO", type="string", length=30)
     */
    private $dsUsuario;

    /**
     * @var string
     *
     * @ORM\Column(name="DS_SENHA", type="string", length=255)
     */
    private $dsSenha;

    /**
     * @var string
     *
     * @ORM\Column(name="DS_PAPEL", type="string", length=250)
     */
    private $dsPapel;

    /**
     * @var int
     *
     * @ORM\Column(name="CO_PERFIL_ACESSO", type="integer", nullable=false)
     */
    private $coPerfilAcesso;

    /**
     * @var int
     *
     * @ORM\Column(name="CO_DEPARTAMENTO", type="integer", nullable=true)
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
     * @ORM\Column(name="ST_REGISTRO_ATIVO", type="string", length=1, nullable=true)
     */
    private $stRegistroAtivo;

    public function __construct()
    {
        $this->usuarioPessoa = new ArrayCollection();
        $this->perfil = new ArrayCollection();
        $this->departamento = new ArrayCollection();
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
     * Set dsUsuario
     *
     * @param string $dsUsuario
     *
     * @return Usuario
     */
    public function setDsUsuario($dsUsuario)
    {
        $this->dsUsuario = $dsUsuario;

        return $this;
    }

    /**
     * Get dsUsuario
     *
     * @return string
     */
    public function getDsUsuario()
    {
        return $this->dsUsuario;
    }

    /**
     * Set dsSenha
     *
     * @param string $dsSenha
     *
     * @return Usuario
     */
    public function setDsSenha($dsSenha)
    {
        $this->dsSenha = $dsSenha;

        return $this;
    }

    /**
     * Get dsSenha
     *
     * @return string
     */
    public function getDsSenha()
    {
        return $this->dsSenha;
    }

    /**
     * Set dsPapel
     *
     * @param string $dsPapel
     *
     * @return Usuario
     */
    public function setDsPapel($dsPapel)
    {
        $this->dsPapel = $dsPapel;

        return $this;
    }

    /**
     * Get dsPapel
     *
     * @return string
     */
    public function getDsPapel()
    {
        return $this->dsPapel;
    }

    /**
     * @return int
     */
    public function getCoPerfilAcesso()
    {
        return $this->coPerfilAcesso;
    }

    /**
     * @param int $coPerfilAcesso
     * @return Usuario
     */
    public function setCoPerfilAcesso($coPerfilAcesso)
    {
        $this->coPerfilAcesso = $coPerfilAcesso;
        return $this;
    }

    /**
     * @return int
     *
     */
    public function getCoDepartamento()
    {
        return $this->coDepartamento;
    }

    /**
     * @param int $coDepartamento
     * @return Usuario
     */
    public function setCoDepartamento($coDepartamento)
    {
        $this->coDepartamento = $coDepartamento;
        return $this;
    }

    /**
     * Set dtCadastro
     *
     * @param \DateTime $dtCadastro
     *
     * @return Usuario
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
     * @return Usuario
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
     * @return Usuario
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
    public function getPerfil()
    {
        return $this->perfil;
    }

    /**
     * @param mixed $perfil
     * @return Usuario
     */
    public function setPerfil($perfil)
    {
        $this->perfil = $perfil;
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
     * @param mixed $departamento
     * @return Usuario
     */
    public function setDepartamento($departamento)
    {
        $this->departamento = $departamento;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUsuarioPessoa()
    {
        return $this->usuarioPessoa;
    }

    /**
     * @param mixed $usuarioPessoa
     * @return Usuario
     */
    public function setUsuarioPessoa($usuarioPessoa)
    {
        $this->usuarioPessoa = $usuarioPessoa;
        return $this;
    }

}

