<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserPF
 *
 * @ORM\Table(name="TB_USUARIO_PESSOAFISICA", schema="DBPROPOSTASAS")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserPFRepository")
 */
class UserPF
{
    /**
     * @var int
     *
     * @ORM\Column(name="CO_USUARIO", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="NO_PESSOA_FISICA", type="string", length=150)
     */
    private $noPessoaFisica;

    /**
     * @var string
     *
     * @ORM\Column(name="NU_CPF", type="string", length=11)
     */
    private $nuCpf;

    /**
     * @var string
     *
     * @ORM\Column(name="DS_EMAIL", type="string", length=150)
     */
    private $dsEmail;


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
     * Set noPessoaFisica
     *
     * @param string $noPessoaFisica
     *
     * @return UserPF
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
     * Set nuCpf
     *
     * @param string $nuCpf
     *
     * @return UserPF
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
     * Set dsEmail
     *
     * @param string $dsEmail
     *
     * @return UserPF
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
}

