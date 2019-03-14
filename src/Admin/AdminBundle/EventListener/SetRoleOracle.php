<?php
/**
 * Created by PhpStorm.
 * User: fabio.teixeira
 * Date: 25/06/2018
 * Time: 11:15
 */

namespace Admin\AdminBundle\EventListener;

use Doctrine\ORM\Event\LifecycleEventArgs;
//use Doctrine\ORM\Event\PreUpdateEventArgs;

class SetRoleOracle
{
    public function prePersist(LifecycleEventArgs $args)
    {
        //$entityManager = $args->getEntityManager();
        echo "teste";
        //$entityManager->createNativeQuery("SET RO_GERAL_C, ro_cgpan_t ROLE  IDENTIFIED BY InFoDaB20971cGpAn");
    }
}