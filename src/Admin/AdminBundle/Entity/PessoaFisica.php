<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PessoaFisica
 *
 * @ORM\Table(name="TB_PESSOA_FISICA", schema="DBPESSOA")
 * @ORM\Entity(repositoryClass="Admin\AdminBundle\Repository\PessoaFisicaRepository")
 */
class PessoaFisica
{

    /**
     * @ORM\OneToOne(targetEntity="Admin\AdminBundle\Entity\Pessoa")
     * @ORM\JoinColumn(name="NU_CPF", referencedColumnName="NU_CPF_CNPJ_PESSOA")
     */
    private $pessoa;

    /**
     * @var int
     *
     * @ORM\Column(name="NU_CPF", type="string")
     * @ORM\Id
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DT_NASCIMENTO", type="datetime")
     */
    private $dtNascimento;

    /**
     * @var string
     *
     * @ORM\Column(name="TP_SEXO", type="string", length=1)
     */
    private $tpSexo;

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
     * Set dtNascimento
     *
     * @param \DateTime $dtNascimento
     *
     * @return PessoaFisica
     */
    public function setDtNascimento($dtNascimento)
    {
        $this->dtNascimento = $dtNascimento;

        return $this;
    }

    /**
     * Get dtNascimento
     *
     * @return \DateTime
     */
    public function getDtNascimento()
    {
        return $this->dtNascimento;
    }

    /**
     * Set tpSexo
     *
     * @param string $tpSexo
     *
     * @return PessoaFisica
     */
    public function setTpSexo($tpSexo)
    {
        $this->tpSexo = $tpSexo;

        return $this;
    }

    /**
     * Get tpSexo
     *
     * @return string
     */
    public function getTpSexo()
    {
        return $this->tpSexo;
    }

    /**
     * @return mixed
     */
    public function getPessoa()
    {
        return $this->pessoa;
    }

    /**
     * @param mixed $pessoa
     */
    public function setPessoa($pessoa)
    {
        $this->pessoa = $pessoa;
    }


}

