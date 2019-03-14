<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Municipio
 *
 * @ORM\Table(name="TB_MUNICIPIO", schema="DBGERAL")
 * @ORM\Entity(repositoryClass="Admin\AdminBundle\Repository\MunicipioRepository")
 */
class Municipio
{
    /**
     * @var int
     *
     * @ORM\Column(name="CO_MUNICIPIO_IBGE", type="string", length=6)
     * @ORM\Id
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="CO_UF_IBGE", type="string", length=2)
     */
    private $coUFIbge;

    /**
     * @var string
     *
     * @ORM\Column(name="SG_UF", type="string", length=255)
     */
    private $sgUF;

    /**
     * @var string
     *
     * @ORM\Column(name="NO_MUNICIPIO", type="string", length=60)
     */
    private $noMunicipio;

    /**
     * @var string
     *
     * @ORM\Column(name="NO_MUNICIPIO_ACENTUADO", type="string", length=60)
     */
    private $noMunicipioAcentuado;

    /**
     * @var string
     *
     * @ORM\Column(name="ST_CAPITAL", type="string", length=1)
     */
    private $stCapital;

    /**
     * @var string
     *
     * @ORM\Column(name="ST_MUNICIPIO", type="string", length=10)
     */
    private $stMunicipio;

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
     * Set coUFIbge
     *
     * @param string $coUFIbge
     *
     * @return Municipio
     */
    public function setCoUFIbge($coUFIbge)
    {
        $this->coUFIbge = $coUFIbge;

        return $this;
    }

    /**
     * Get coUFIbge
     *
     * @return string
     */
    public function getCoUFIbge()
    {
        return $this->coUFIbge;
    }

    /**
     * Set sgUF
     *
     * @param string $sgUF
     *
     * @return Municipio
     */
    public function setSgUF($sgUF)
    {
        $this->sgUF = $sgUF;

        return $this;
    }

    /**
     * Get sgUF
     *
     * @return string
     */
    public function getSgUF()
    {
        return $this->sgUF;
    }

    /**
     * Set noMunicipio
     *
     * @param string $noMunicipio
     *
     * @return Municipio
     */
    public function setNoMunicipio($noMunicipio)
    {
        $this->noMunicipio = $noMunicipio;

        return $this;
    }

    /**
     * Get noMunicipio
     *
     * @return string
     */
    public function getNoMunicipio()
    {
        return $this->noMunicipio;
    }

    /**
     * Set noMunicipioAcentuado
     *
     * @param string $noMunicipioAcentuado
     *
     * @return Municipio
     */
    public function setNoMunicipioAcentuado($noMunicipioAcentuado)
    {
        $this->noMunicipioAcentuado = $noMunicipioAcentuado;

        return $this;
    }

    /**
     * Get noMunicipioAcentuado
     *
     * @return string
     */
    public function getNoMunicipioAcentuado()
    {
        return $this->noMunicipioAcentuado;
    }

    /**
     * Set stCapital
     *
     * @param string $stCapital
     *
     * @return Municipio
     */
    public function setStCapital($stCapital)
    {
        $this->stCapital = $stCapital;

        return $this;
    }

    /**
     * Get stCapital
     *
     * @return string
     */
    public function getStCapital()
    {
        return $this->stCapital;
    }

    /**
     * Set stMunicipio
     *
     * @param string $stMunicipio
     *
     * @return Municipio
     */
    public function setStMunicipio($stMunicipio)
    {
        $this->stMunicipio = $stMunicipio;

        return $this;
    }

    /**
     * Get stMunicipio
     *
     * @return string
     */
    public function getStMunicipio()
    {
        return $this->stMunicipio;
    }

    /**
     * Set stRegistroAtivo
     *
     * @param string $stRegistroAtivo
     *
     * @return Municipio
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

