<?php

namespace ContainerBJxAC0Y;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProfilFormTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\ProfilFormType' shared autowired service.
     *
     * @return \App\Form\ProfilFormType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\ProfilFormType'] = new \App\Form\ProfilFormType();
    }
}
