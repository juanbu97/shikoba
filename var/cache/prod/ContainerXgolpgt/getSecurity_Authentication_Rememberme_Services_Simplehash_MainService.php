<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.authentication.rememberme.services.simplehash.main' shared service.

return $this->services['security.authentication.rememberme.services.simplehash.main'] = new \Symfony\Component\Security\Http\RememberMe\TokenBasedRememberMeServices(array(0 => ${($_ = isset($this->services['security.user.provider.concrete.user_provider']) ? $this->services['security.user.provider.concrete.user_provider'] : $this->load(__DIR__.'/getSecurity_User_Provider_Concrete_UserProviderService.php')) && false ?: '_'}), 'ThisTokenIsNotSoSecretChangeIt', 'main', array('lifetime' => 300, 'path' => '/', 'name' => 'REMEMBERME', 'domain' => NULL, 'secure' => false, 'httponly' => true, 'always_remember_me' => false, 'remember_me_parameter' => '_remember_me'), ${($_ = isset($this->services['monolog.logger.security']) ? $this->services['monolog.logger.security'] : $this->load(__DIR__.'/getMonolog_Logger_SecurityService.php')) && false ?: '_'});