<?php

namespace ContainerHfisquD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QaiGT_JService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.QaiGT.j' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.QaiGT.j'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'dish' => ['privates', '.errored..service_locator.QaiGT.j.App\\Entity\\Dishes', NULL, 'Cannot autowire service ".service_locator.QaiGT.j": it references class "App\\Entity\\Dishes" but no such service exists.'],
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
        ], [
            'dish' => 'App\\Entity\\Dishes',
            'doctrine' => '?',
        ]);
    }
}
