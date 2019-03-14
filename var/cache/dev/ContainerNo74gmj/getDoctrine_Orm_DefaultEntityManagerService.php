<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'doctrine.orm.default_entity_manager' shared service.

$a = ${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->getAnnotationReaderService()) && false ?: '_'};

$b = new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($a, array(0 => 'D:\\planouso\\src\\AppBundle\\Entity', 1 => 'D:\\planouso\\src\\Admin\\AdminBundle\\Entity', 2 => 'D:\\planouso\\src\\Planodeuso\\AtividadeBundle\\Entity'));

$c = new \Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain();
$c->addDriver($b, 'AppBundle\\Entity');
$c->addDriver($b, 'Admin\\AdminBundle\\Entity');
$c->addDriver($b, 'Planodeuso\\AtividadeBundle\\Entity');

$d = new \Doctrine\ORM\Configuration();
$d->setEntityNamespaces(array('AppBundle' => 'AppBundle\\Entity', 'AdminBundle' => 'Admin\\AdminBundle\\Entity', 'AtividadeBundle' => 'Planodeuso\\AtividadeBundle\\Entity'));
$d->setMetadataCacheImpl(${($_ = isset($this->services['doctrine_cache.providers.doctrine.orm.default_metadata_cache']) ? $this->services['doctrine_cache.providers.doctrine.orm.default_metadata_cache'] : $this->load(__DIR__.'/getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService.php')) && false ?: '_'});
$d->setQueryCacheImpl(${($_ = isset($this->services['doctrine_cache.providers.doctrine.orm.default_query_cache']) ? $this->services['doctrine_cache.providers.doctrine.orm.default_query_cache'] : $this->load(__DIR__.'/getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService.php')) && false ?: '_'});
$d->setResultCacheImpl(${($_ = isset($this->services['doctrine_cache.providers.doctrine.orm.default_result_cache']) ? $this->services['doctrine_cache.providers.doctrine.orm.default_result_cache'] : $this->load(__DIR__.'/getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService.php')) && false ?: '_'});
$d->setMetadataDriverImpl($c);
$d->setProxyDir(($this->targetDirs[0].'/doctrine/orm/Proxies'));
$d->setProxyNamespace('Proxies');
$d->setAutoGenerateProxyClasses(true);
$d->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
$d->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
$d->setNamingStrategy(new \Doctrine\ORM\Mapping\UnderscoreNamingStrategy());
$d->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
$d->setEntityListenerResolver(${($_ = isset($this->services['doctrine.orm.default_entity_listener_resolver']) ? $this->services['doctrine.orm.default_entity_listener_resolver'] : $this->services['doctrine.orm.default_entity_listener_resolver'] = new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerAwareEntityListenerResolver($this)) && false ?: '_'});
$d->setRepositoryFactory(new \Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory(new \Symfony\Component\DependencyInjection\ServiceLocator(array())));
$d->addCustomStringFunction('nvl', 'DoctrineExtensions\\Query\\Oracle\\Nvl');
$d->addCustomStringFunction('listagg', 'DoctrineExtensions\\Query\\Oracle\\Listagg');
$d->addCustomStringFunction('to_date', 'DoctrineExtensions\\Query\\Oracle\\ToDate');
$d->addCustomStringFunction('decode', 'DoctrineExtensions\\Query\\Oracle\\Decode');
$d->addCustomNumericFunction('greatest', 'DoctrineExtensions\\Query\\Oracle\\Greatest');
$d->addCustomDatetimeFunction('day', 'DoctrineExtensions\\Query\\Oracle\\Day');
$d->addCustomDatetimeFunction('month', 'DoctrineExtensions\\Query\\Oracle\\Month');
$d->addCustomDatetimeFunction('year', 'DoctrineExtensions\\Query\\Oracle\\Year');
$d->addCustomDatetimeFunction('to_char', 'DoctrineExtensions\\Query\\Oracle\\ToChar');
$d->addCustomDatetimeFunction('trunc', 'DoctrineExtensions\\Query\\Oracle\\Trunc');

$this->services['doctrine.orm.default_entity_manager'] = $instance = \Doctrine\ORM\EntityManager::create(${($_ = isset($this->services['doctrine.dbal.default_connection']) ? $this->services['doctrine.dbal.default_connection'] : $this->load(__DIR__.'/getDoctrine_Dbal_DefaultConnectionService.php')) && false ?: '_'}, $d);

${($_ = isset($this->services['doctrine.orm.default_manager_configurator']) ? $this->services['doctrine.orm.default_manager_configurator'] : $this->services['doctrine.orm.default_manager_configurator'] = new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator(array(), array())) && false ?: '_'}->configure($instance);

return $instance;
