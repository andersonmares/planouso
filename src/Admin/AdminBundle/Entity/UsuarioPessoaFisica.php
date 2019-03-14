<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UsuarioPessoaFisica
 *
 * @ORM\Table(name="TB_USUARIO_PESSOAFISICA", schema="DBPROPOSTASAS")
 * @ORM\Entity(repositoryClass="Admin\AdminBundle\Repository\UsuarioPessoaFisicaRepository")
 */
class UsuarioPessoaFisica
{

    /**
     * @ORM\OneToOne(targetEntity="Admin\AdminBundle\Entity\Usuario")
     * @ORM\JoinColumn(name="CO_USUARIO", referencedColumnName="CO_SEQ_USUARIO")
     */
    private $usuario;


    /**
     * @var int
     *
     * @ORM\Column(name="CO_SEQ_USUARIO_PESSOAFISICA", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="DBPROPOSTASAS.SQ_USUARIOPF_COSEQUSUARIOPF")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="CO_USUARIO", type="integer", unique=true)
     */
    private $coUsuario;

    /**
     * @var string
     *
     * @ORM\Column(name="NO_PESSOA_FISICA", type="string", length=150)
     */
    private $noPessoaFisica;

    /**
     * @var string
     *
     * @ORM\Column(name="DS_EMAIL", type="string", length=150)
     */
    private $dsEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="NU_DDD", type="string", length=2)
     */
    private $nuDdd;

    /**
     * @var string
     *
     * @ORM\Column(name="NU_TELEFONE", type="string", length=10)
     */
    private $nuTelefone;

    /**
     * @var string
     *
     * @ORM\Column(name="NU_CPF", type="string", length=11)
     */
    private $nuCpf;

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
     * Set coUsuario
     *
     * @param integer $coUsuario
     *
     * @return UsuarioPessoaFisica
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
     * Set noPessoaFisica
     *
     * @param string $noPessoaFisica
     *
     * @return UsuarioPessoaFisica
     */
    public function setNoPessoaFisica($noPessoaFisica)
    {
        $this->noPessoaFisica = $noPessoaFisica;

        return $this;
    }

    /**
     * Get noPessoaFisica
     *
     * @return string
     */
    public function getNoPessoaFisica()
    {
        return $this->noPessoaFisica;
    }

    /**
     * Set dsEmail
     *
     * @param string $dsEmail
     *
     * @return UsuarioPessoaFisica
     */
    public function setDsEmail($dsEmail)
    {
        $this->dsEmail = $dsEmail;

        return $this;
    }

    /**
     * Get dsEmail
     *
     * @return string
     */
    public function getDsEmail()
    {
        return $this->dsEmail;
    }

    /**
     * Set nuDdd
     *
     * @param string $nuDdd
     *
     * @return UsuarioPessoaFisica
     */
    public function setNuDdd($nuDdd)
    {
        $this->nuDdd = $nuDdd;

        return $this;
    }

    /**
     * Get nuDdd
     *
     * @return string
     */
    public function getNuDdd()
    {
        return $this->nuDdd;
    }

    /**
     * Set nuTelefone
     *
     * @param string $nuTelefone
     *
     * @return UsuarioPessoaFisica
     */
    public function setNuTelefone($nuTelefone)
    {
        $this->nuTelefone = $nuTelefone;

        return $this;
    }

    /**
     * Get nuTelefone
     *
     * @return string
     */
    public function getNuTelefone()
    {
        return $this->nuTelefone;
    }

    /**
     * Set nuCpf
     *
     * @param string $nuCpf
     *
     * @return UsuarioPessoaFisica
     */
    public function setNuCpf($nuCpf)
    {
        $this->nuCpf = $nuCpf;

        return $this;
    }

    /**
     * Get nuCpf
     *
     * @return string
     */
    public function getNuCpf()
    {
        return $this->nuCpf;
    }

    /**
     * Set dtCadastro
     *
     * @param \DateTime $dtCadastro
     *
     * @return UsuarioPessoaFisica
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
     * @return UsuarioPessoaFisica
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
     * @return UsuarioPessoaFisica
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
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * @param mixed $usuario
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
        return $this;
    }

}

