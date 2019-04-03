<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UF
 *
 * @ORM\Table(name="TB_UF", schema="DBGERAL")
 * @ORM\Entity(repositoryClass="Admin\AdminBundle\Repository\UFRepository")
 */
class UF
{
    /**
     * @var int
     *
     * @ORM\Column(name="CO_UF_IBGE", type="string", length=2)
     * @ORM\Id
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="SG_UF", type="string", length=2)
     */
    private $sgUf;

    /**
     * @var string
     *
     * @ORM\Column(name="NO_UF_ACENTUADO", type="string", length=30)
     */
    private $noUFAcentuado;

    /**
     * @var string
     *
     * @ORM\Column(name="CO_REGIAO", type="string", length=1)
     */
    private $coRegiao;

    /**
     * @var string
     *
     * @ORM\Column(name="NO_UF", type="string", length=30)
     */
    private $noUF;

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
     * Set sgUf
     *
     * @param string $sgUf
     *
     * @return UF
     */
    public function setSgUf($sgUf)
    {
        $this->sgUf = $sgUf;
        return $this;
    }

    /**
     * Get sgUf
     *
     * @return string
     */
    public function getSgUf()
    {
        if ($this->id == 'XX') {
            $this->sgUf = "TODOS";
        }
        return $this->sgUf;
    }

    /**
     * Set noUFAcentuado
     *
     * @param string $noUFAcentuado
     *
     * @return UF
     */
    public function setNoUFAcentuado($noUFAcentuado)
    {
        $this->noUFAcentuado = $noUFAcentuado;

        return $this;
    }

    /**
     * Get noUFAcentuado
     *
     * @return string
     */
    public function getNoUFAcentuado()
    {
        return $this->noUFAcentuado;
    }

    /**
     * Set coRegiao
     *
     * @param string $coRegiao
     *
     * @return UF
     */
    public function setCoRegiao($coRegiao)
    {
        $this->coRegiao = $coRegiao;

        return $this;
    }

    /**
     * Get coRegiao
     *
     * @return string
     */
    public function getCoRegiao()
    {
        return $this->coRegiao;
    }

    /**
     * Set noUF
     *
     * @param string $noUF
     *
     * @return UF
     */
    public function setNoUF($noUF)
    {
        $this->noUF = $noUF;

        return $this;
    }

    /**
     * Get noUF
     *
     * @return string
     */
    public function getNoUF()
    {
        return $this->noUF;
    }

    /**
     * Set stRegistroAtivo
     *
     * @param string $stRegistroAtivo
     *
     * @return UF
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

