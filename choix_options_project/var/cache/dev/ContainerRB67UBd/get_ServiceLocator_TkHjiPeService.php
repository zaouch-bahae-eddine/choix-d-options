<?php

namespace ContainerRB67UBd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TkHjiPeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.tkHjiPe' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.tkHjiPe'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'promotion' => ['privates', '.errored.3t6WOnN', NULL, 'Cannot determine controller argument for "App\\Controller\\PromotionController::edit()": the $promotion argument is type-hinted with the non-existent class or interface: "App\\Entity\\Promotion".'],
            'promotionRepository' => ['privates', '.errored.X9nSBNU', NULL, 'Cannot determine controller argument for "App\\Controller\\PromotionController::edit()": the $promotionRepository argument is type-hinted with the non-existent class or interface: "App\\Repository\\PromotionRepository".'],
        ], [
            'em' => '?',
            'promotion' => '?',
            'promotionRepository' => '?',
        ]);
    }
}
