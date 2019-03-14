<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Role
 *
 * @ORM\Table(name="TB_PERFIL_ACESSO", schema="DBPROPOSTASAS")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PerfilAcessoRepository")
 */
class PerfilAcesso
{
    /**
     * @var int
     *
     * @ORM\Column(name="CO_SEQ_PERFIL_ACESSO", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="SQ_PERFILACESSO_COSEQPERFLACSS")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="DS_PERFIL_ACESSO", type="string", length=150)
     */
    private $dsPerfilAcesso;

    /**
     * @var string
     *
     * @ORM\Column(name="DS_PAPEL", type="string", length=100)
     */
    private $dsPapel;

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
     * Set dsPerfilAcesso
     *
     * @param string $dsPerfilAcesso
     *
     * @return PerfilAcesso
     */
    public function setDsPerfilAcesso($dsPerfilAcesso)
    {
        $this->dsPerfilAcesso = $dsPerfilAcesso;

        return $this;
    }

    /**
     * Get dsPerfilAcesso
     *
     * @return string
     */
    public function getDsPerfilAcesso()
    {
        return $this->dsPerfilAcesso;
    }

    /**
     * @return string
     */
    public function getDsPapel()
    {
        return $this->dsPapel;
    }

    /**
     * @param string $dsPapel
     * @return PerfilAcesso
     */
    public function setDsPapel($dsPapel)
    {
        $this->dsPapel = $dsPapel;
        return $this;
    }



    /**
     * Set stRegistroAtivo
     *
     * @param string $stRegistroAtivo
     *
     * @return PerfilAcesso
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

