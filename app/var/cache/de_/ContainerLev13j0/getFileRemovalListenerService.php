<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'file_removal_listener' shared service.

return $this->services['file_removal_listener'] = new \PartKeepr\UploadedFileBundle\EventListener\FileRemovalListener(${($_ = isset($this->services['partkeepr_uploadedfile_service']) ? $this->services['partkeepr_uploadedfile_service'] : ($this->services['partkeepr_uploadedfile_service'] = new \PartKeepr\UploadedFileBundle\Services\UploadedFileService($this))) && false ?: '_'}, ${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->getAnnotationReaderService()) && false ?: '_'}, ${($_ = isset($this->services['property_accessor']) ? $this->services['property_accessor'] : $this->getPropertyAccessorService()) && false ?: '_'});