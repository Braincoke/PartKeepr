<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'partkeepr.versionservice' shared service.

return $this->services['partkeepr.versionservice'] = new \PartKeepr\CoreBundle\Services\VersionService(${($_ = isset($this->services['partkeepr.systemnoticeservice']) ? $this->services['partkeepr.systemnoticeservice'] : $this->load('getPartkeepr_SystemnoticeserviceService.php')) && false ?: '_'}, ${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, ${($_ = isset($this->services['partkeepr.remote_file_loader.factory']) ? $this->services['partkeepr.remote_file_loader.factory'] : ($this->services['partkeepr.remote_file_loader.factory'] = new \PartKeepr\RemoteFileLoader\RemoteFileLoaderFactory())) && false ?: '_'});