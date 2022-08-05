<?php

namespace ContainerHfisquD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_YitKL3Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.yitK_L3' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.yitK_L3'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'dr' => ['privates', 'App\\Repository\\DishesRepository', 'getDishesRepositoryService', true],
        ], [
            'doctrine' => '?',
            'dr' => 'App\\Repository\\DishesRepository',
        ]);
    }
}
