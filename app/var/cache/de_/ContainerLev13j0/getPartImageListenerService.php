<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'part_image_listener' shared service.

return $this->services['part_image_listener'] = new \PartKeepr\PartBundle\Listeners\ImageAttachmentListener(${($_ = isset($this->services['partkeepr_image_service']) ? $this->services['partkeepr_image_service'] : ($this->services['partkeepr_image_service'] = new \PartKeepr\ImageBundle\Services\ImageService($this))) && false ?: '_'});