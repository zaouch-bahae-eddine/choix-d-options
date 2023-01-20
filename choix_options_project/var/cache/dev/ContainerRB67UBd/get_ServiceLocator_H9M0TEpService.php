<?php

namespace ContainerRB67UBd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_H9M0TEpService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.H9M0TEp' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.H9M0TEp'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'ueRepository' => ['privates', 'App\\Repository\\UeRepository', 'getUeRepositoryService', true],
        ], [
            'ueRepository' => 'App\\Repository\\UeRepository',
        ]);
    }
}
