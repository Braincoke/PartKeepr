<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'filesystem_temp' shared service.

return $this->services['filesystem_temp'] = new \Gaufrette\Filesystem(new \Gaufrette\Adapter\Local(($this->targetDirs[3].'/../data/temp/'), true));