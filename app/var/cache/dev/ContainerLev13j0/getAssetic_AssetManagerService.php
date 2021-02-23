<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'assetic.asset_manager' shared service.

$this->services['assetic.asset_manager'] = $instance = new \Assetic\Factory\LazyAssetManager(${($_ = isset($this->services['assetic.asset_factory']) ? $this->services['assetic.asset_factory'] : $this->getAssetic_AssetFactoryService()) && false ?: '_'}, ['twig' => new \Assetic\Factory\Loader\CachedFormulaLoader(new \Assetic\Extension\Twig\TwigFormulaLoader(${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->getTwigService()) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.assetic']) ? $this->services['monolog.logger.assetic'] : $this->load('getMonolog_Logger_AsseticService.php')) && false ?: '_'}), new \Assetic\Cache\ConfigCache(($this->targetDirs[0].'/assetic/config')), true)]);

$a = ${($_ = isset($this->services['templating.loader']) ? $this->services['templating.loader'] : $this->load('getTemplating_LoaderService.php')) && false ?: '_'};

$instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource([0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'PartKeeprFrontendBundle', ($this->targetDirs[3].'/Resources/PartKeeprFrontendBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'PartKeeprFrontendBundle', ($this->targetDirs[4].'/src/PartKeepr/FrontendBundle/Resources/views'), '/\\.[^.]+\\.twig$/')]), 'twig');
$instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource([0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'PartKeeprMobileFrontendBundle', ($this->targetDirs[3].'/Resources/PartKeeprMobileFrontendBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'PartKeeprMobileFrontendBundle', ($this->targetDirs[4].'/src/PartKeepr/MobileFrontendBundle/Resources/views'), '/\\.[^.]+\\.twig$/')]), 'twig');
$instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, '', ($this->targetDirs[3].'/Resources/views'), '/\\.[^.]+\\.twig$/'), 'twig');

return $instance;