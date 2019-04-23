<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StatusItem
 *
 * @ORM\Table(name="TB_STATUS_ITEM", schema="DBPROPOSTASAS")
 * @ORM\Entity(repositoryClass="Admin\AdminBundle\Repository\StatusItemRepository")
 */
class StatusItem
{

    /**
     * @var int
     *
     * @ORM\Column(name="CO_SEQ_STATUS", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")

     */
    private $coSeqStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="NO_STATUS", type="string", length=250)
     */
    private $noStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="ST_REGISTRO_ATIVO", type="string", length=1)
     */
    private $stRegistoAtivo;

    /**
     * @return int
     */
    public function getCoSeqStatus()
    {
        return $this->coSeqStatus;
    }

    /**
     * set coSeqStatus
     * @param int $coSeqStatus
     */
    public function setCoSeqStatus($coSeqStatus)
    {
        $this->coSeqStatus = $coSeqStatus;
    }

    /**
     * @return string
     */
    public function getNoStatus()
    {
        return $this->noStatus;
    }

    /**
     * set noStatus
     *
     * @param string $noStatus
     */
    public function setNoStatus($noStatus)
    {
        $this->noStatus = $noStatus;
    }

    /**
     * @return string
     */
    public function getStRegistoAtivo()
    {
        return $this->stRegistoAtivo;
    }

    /**
     * set stRegistroAtivo
     *
     * @param string $stRegistoAtivo
     */
    public function setStRegistoAtivo($stRegistoAtivo)
    {
        $this->stRegistoAtivo = $stRegistoAtivo;
    }


}

