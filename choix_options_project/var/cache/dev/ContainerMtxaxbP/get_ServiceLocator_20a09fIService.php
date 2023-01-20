<?php

namespace ContainerMtxaxbP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_20a09fIService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.20a09fI' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.20a09fI'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'blocRepository' => ['privates', 'App\\Repository\\SkillBlocRepository', 'getSkillBlocRepositoryService', true],
            'parcour' => ['privates', '.errored..service_locator.20a09fI.App\\Entity\\Parcour', NULL, 'Cannot autowire service ".service_locator.20a09fI": it needs an instance of "App\\Entity\\Parcour" but this type has been excluded in "config/services.yaml".'],
            'parcourRepository' => ['privates', 'App\\Repository\\ParcourRepository', 'getParcourRepositoryService', true],
            'ueRepository' => ['privates', 'App\\Repository\\UeRepository', 'getUeRepositoryService', true],
        ], [
            'blocRepository' => 'App\\Repository\\SkillBlocRepository',
            'parcour' => 'App\\Entity\\Parcour',
            'parcourRepository' => 'App\\Repository\\ParcourRepository',
            'ueRepository' => 'App\\Repository\\UeRepository',
        ]);
    }
}
