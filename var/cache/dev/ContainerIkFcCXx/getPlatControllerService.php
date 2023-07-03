<?php

namespace ContainerIkFcCXx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPlatControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\PlatController' shared autowired service.
     *
     * @return \App\Controller\PlatController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/PlatController.php';

        $container->services['App\\Controller\\PlatController'] = $instance = new \App\Controller\PlatController(($container->privates['App\\Repository\\PlatRepository'] ?? $container->load('getPlatRepositoryService')));

        $instance->setContainer(($container->privates['.service_locator.CshazM0'] ?? $container->load('get_ServiceLocator_CshazM0Service'))->withContext('App\\Controller\\PlatController', $container));

        return $instance;
    }
}
