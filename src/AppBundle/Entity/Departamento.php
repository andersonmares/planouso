<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Departamento
 *
 * @ORM\Table(name="TB_DEPARTAMENTO", schema="DBPROPOSTASAS")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DepartamentoRepository")
 */
class Departamento
{
    /**
     * @var int
     *
     * @ORM\Column(name="CO_SEQ_DEPARTAMENTO", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="SQ_DEPARTAMENTO_COSEQDEPARTAMENTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="DS_DEPARTAMENTO", type="string", length=250)
     */
    private $dsDepartamento;

    /**
     * @var string
     *
     * @ORM\Column(name="SG_DEPARTAMENTO", type="string", length=30)
     */
    private $sgDepartamento;

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
     * Set dsDepartamento
     *
     * @param string $dsDepartamento
     *
     * @return Departamento
     */
    public function setDsDepartamento($dsDepartamento)
    {
        $this->dsDepartamento = $dsDepartamento;

        return $this;
    }

    /**
     * Get dsDepartamento
     *
     * @return string
     */
    public function getDsDepartamento()
    {
        return $this->dsDepartamento;
    }

    /**
     * Set sgDepartamento
     *
     * @param string $sgDepartamento
     *
     * @return Departamento
     */
    public function setSgDepartamento($sgDepartamento)
    {
        $this->sgDepartamento = $sgDepartamento;

        return $this;
    }

    /**
     * Get sgDepartamento
     *
     * @return string
     */
    public function getSgDepartamento()
    {
        return $this->sgDepartamento;
    }

    /**
     * Set stRegistroAtivo
     *
     * @param string $stRegistroAtivo
     *
     * @return Departamento
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

