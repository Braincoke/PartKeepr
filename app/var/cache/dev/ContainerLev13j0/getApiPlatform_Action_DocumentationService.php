<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'api_platform.action.documentation' shared service.

return $this->services['api_platform.action.documentation'] = new \ApiPlatform\Core\Documentation\Action\DocumentationAction(${($_ = isset($this->services['api_platform.metadata.resource.name_collection_factory']) ? $this->services['api_platform.metadata.resource.name_collection_factory'] : $this->getApiPlatform_Metadata_Resource_NameCollectionFactoryService()) && false ?: '_'}, 'PartKeepr', '', '0.0.1', $this->parameters['api_platform.formats']);