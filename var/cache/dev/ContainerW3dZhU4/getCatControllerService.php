<?php

namespace ContainerW3dZhU4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCatControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\CatController' shared autowired service.
     *
     * @return \App\Controller\CatController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/CatController.php';

        $container->services['App\\Controller\\CatController'] = $instance = new \App\Controller\CatController(($container->privates['App\\Repository\\CategorieRepository'] ?? $container->load('getCategorieRepositoryService')), ($container->privates['App\\Repository\\DetailRepository'] ?? $container->load('getDetailRepositoryService')), ($container->privates['App\\Repository\\PlatRepository'] ?? $container->load('getPlatRepositoryService')));

        $instance->setContainer(($container->privates['.service_locator.CshazM0'] ?? $container->load('get_ServiceLocator_CshazM0Service'))->withContext('App\\Controller\\CatController', $container));

        return $instance;
    }
}