<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'storage_location_category.root_category_listener' shared service.

return $this->services['storage_location_category.root_category_listener'] = new \PartKeepr\CategoryBundle\EventListener\RootCategoryListener($this, 'partkeepr.storage_location.category_service');