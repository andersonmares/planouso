<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.authentication.provider.dao.main' shared service.

return $this->services['security.authentication.provider.dao.main'] = new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider(${($_ = isset($this->services['security.user.provider.concrete.db']) ? $this->services['security.user.provider.concrete.db'] : $this->load(__DIR__.'/getSecurity_User_Provider_Concrete_DbService.php')) && false ?: '_'}, new \Symfony\Component\Security\Core\User\UserChecker(), 'main', ${($_ = isset($this->services['security.encoder_factory']) ? $this->services['security.encoder_factory'] : $this->load(__DIR__.'/getSecurity_EncoderFactoryService.php')) && false ?: '_'}, true);
