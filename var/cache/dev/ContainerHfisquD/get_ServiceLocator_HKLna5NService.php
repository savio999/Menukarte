<?php

namespace ContainerHfisquD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HKLna5NService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.hKLna5N' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.hKLna5N'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'liste' => ['privates', '.errored..service_locator.hKLna5N.App\\Entity\\Liste', NULL, 'Cannot autowire service ".service_locator.hKLna5N": it references class "App\\Entity\\Liste" but no such service exists.'],
        ], [
            'liste' => 'App\\Entity\\Liste',
        ]);
    }
}