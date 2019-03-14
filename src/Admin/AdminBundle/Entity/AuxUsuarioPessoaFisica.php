<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Usuario
 *
 * @ORM\Table(name="TB_USUARIO", schema="DBPROPOSTASAS")
 * @ORM\Entity(repositoryClass="Admin\AdminBundle\Repository\AuxUsuarioPessoaFisica")
 */
class AuxUsuarioPessoaFisica
{

    /**
     * @var int
     *
     * @ORM\Column(name="CO_SEQ_USUARIO", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="DBPROPOSTASAS.SQ_USUARIOPLANOUSO_COSEQUSUARIO")
     */
    private $id;


    /**
     * @var int
     * @Assert\NotBlank()
     * @ORM\Column(name="CO_PERFIL_ACESSO", type="integer")
     */
    private $coPerfilAcesso;

    /**
     * @var int
     *
     * @ORM\Column(name="CO_DEPARTAMENTO", type="integer", nullable=true)
     */
    private $coDepartamento;

    /**
     * @var string
     *
     * @ORM\Column(name="NO_PESSOA_FISICA", type="string", length=150)
     * @
     */
    private $noPessoaFisica;

    /**
     * @var string
     * @Assert\Email(
     *     message = "O e-mail '{{ value }}' não é válido.",
     *     checkMX = true
     * )
     * @ORM\Column(name="DS_EMAIL", type="string", length=150)
     */
    private $dsEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="NU_TELEFONE", type="string", length=150)
     */
    private $nuTelefone;

    /**
     * @var string
     *
     * @ORM\Column(name="NU_CPF", type="string", length=11)
     */
    private $nuCpf;

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

}