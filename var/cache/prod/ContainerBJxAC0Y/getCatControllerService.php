<?php

namespace ContainerBJxAC0Y;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCatControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\CatController' shared autowired service.
     *
     * @return \App\Controller\CatController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\CatController'] = $instance = new \App\Controller\CatController(($container->privates['security.authentication_utils'] ?? $container->load('getSecurity_AuthenticationUtilsService')), ($container->privates['App\\Repository\\CategorieRepository'] ?? $container->load('getCategorieRepositoryService')), ($container->privates['App\\Repository\\DetailRepository'] ?? $container->load('getDetailRepositoryService')), ($container->privates['App\\Repository\\PlatRepository'] ?? $container->load('getPlatRepositoryService')));

        $instance->setContainer(($container->privates['.service_locator.CshazM0'] ?? $container->load('get_ServiceLocator_CshazM0Service'))->withContext('App\\Controller\\CatController', $container));

        return $instance;
    }
}
