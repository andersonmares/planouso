<?php
/**
 * Created by PhpStorm.
 * User: fabio.teixeira
 * Date: 25/06/2018
 * Time: 11:15
 */

namespace Admin\AdminBundle\EventListener;

use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\Common\EventSubscriber;
use Doctrine\ORM\Event\PreUpdateEventArgs;

class PreUpdate implements EventSubscriber
{

    public function getSubscribedEvents()
    {
        return array(
            'preUpdate',
        );
    }
    public function preUpdate(LifecycleEventArgs $args)
    {
        $entityManager = $args->getEntityManager();
        /*
         * DESENVOLVIMENTO
         */
        $sql = "SET ROLE RO_GERAL_C, RO_PROPOSTASAS_T IDENTIFIED BY PROPOSTASAS3176135LK";
        /**
         * PRODUCAO
         */
        //$sql = "SET ROLE RO_GERAL_C, RO_PROPOSTASAS_T IDENTIFIED BY ProPosTaSASDFPO1";

        //$entityManager->getConnection()->executeUpdate($sql);
        //var_dump($entityManager);
        /*
        $query->execute();*/

    }

}