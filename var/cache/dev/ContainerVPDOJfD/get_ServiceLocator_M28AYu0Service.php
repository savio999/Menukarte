<?php

namespace ContainerVPDOJfD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_M28AYu0Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.M28AYu0' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.M28AYu0'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'cr' => ['privates', 'App\\Repository\\CategoryRepository', 'getCategoryRepositoryService', true],
            'dr' => ['privates', 'App\\Repository\\DishesRepository', 'getDishesRepositoryService', true],
        ], [
            'cr' => 'App\\Repository\\CategoryRepository',
            'dr' => 'App\\Repository\\DishesRepository',
        ]);
    }
}
