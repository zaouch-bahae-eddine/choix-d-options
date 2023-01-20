<?php

namespace ContainerRB67UBd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZjJ3thDService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ZjJ3thD' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ZjJ3thD'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'bloc' => ['privates', '.errored..service_locator.ZjJ3thD.App\\Entity\\SkillBloc', NULL, 'Cannot autowire service ".service_locator.ZjJ3thD": it needs an instance of "App\\Entity\\SkillBloc" but this type has been excluded in "config/services.yaml".'],
            'ueRepository' => ['privates', 'App\\Repository\\UeRepository', 'getUeRepositoryService', true],
        ], [
            'bloc' => 'App\\Entity\\SkillBloc',
            'ueRepository' => 'App\\Repository\\UeRepository',
        ]);
    }
}
