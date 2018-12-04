<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.access_map' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Http\\AccessMapInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Http\\AccessMap.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpFoundation\\RequestMatcherInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpFoundation\\RequestMatcher.php';

$this->services['security.access_map'] = $instance = new \Symfony\Component\Security\Http\AccessMap();

$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin'), array(0 => 'ROLE_ADMIN'), NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/verzekering'), array(0 => 'ROLE_VERZEKERINGSMEDEWERKER'), NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/apotheker'), array(0 => 'ROLE_APOTHEKER'), NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/arts'), array(0 => 'ROLE_ARTS'), NULL);

return $instance;
