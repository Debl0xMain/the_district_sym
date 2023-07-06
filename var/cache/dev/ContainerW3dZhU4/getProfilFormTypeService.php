<?php

namespace ContainerW3dZhU4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProfilFormTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\ProfilFormType' shared autowired service.
     *
     * @return \App\Form\ProfilFormType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/ProfilFormType.php';

        return $container->privates['App\\Form\\ProfilFormType'] = new \App\Form\ProfilFormType();
    }
}