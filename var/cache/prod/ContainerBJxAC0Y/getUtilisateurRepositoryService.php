<?php

namespace ContainerBJxAC0Y;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUtilisateurRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\UtilisateurRepository' shared autowired service.
     *
     * @return \App\Repository\UtilisateurRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\UtilisateurRepository'] = new \App\Repository\UtilisateurRepository(($container->services['doctrine'] ?? $container->load('getDoctrineService')));
    }
}
