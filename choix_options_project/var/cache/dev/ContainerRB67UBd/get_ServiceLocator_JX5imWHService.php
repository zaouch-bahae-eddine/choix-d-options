<?php

namespace ContainerRB67UBd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_JX5imWHService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.jX5imWH' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.jX5imWH'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'parcourRepository' => ['privates', 'App\\Repository\\ParcourRepository', 'getParcourRepositoryService', true],
        ], [
            'parcourRepository' => 'App\\Repository\\ParcourRepository',
        ]);
    }
}
