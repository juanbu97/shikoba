<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'session.handler' shared service.

return $this->services['session.handler'] = new \Symfony\Component\HttpFoundation\Session\Storage\Handler\StrictSessionHandler(new \Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler(($this->targetDirs[3].'/app/../var/sessions/dev')));
