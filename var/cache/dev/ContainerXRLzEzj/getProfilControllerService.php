<?php

namespace ContainerXRLzEzj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProfilControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ProfilController' shared autowired service.
     *
     * @return \App\Controller\ProfilController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/ProfilController.php';

        $container->services['App\\Controller\\ProfilController'] = $instance = new \App\Controller\ProfilController(($container->privates['App\\Repository\\DetailRepository'] ?? $container->load('getDetailRepositoryService')), ($container->privates['App\\Repository\\UtilisateurRepository'] ?? $container->load('getUtilisateurRepositoryService')));

        $instance->setContainer(($container->privates['.service_locator.CshazM0'] ?? $container->load('get_ServiceLocator_CshazM0Service'))->withContext('App\\Controller\\ProfilController', $container));

        return $instance;
    }
}
