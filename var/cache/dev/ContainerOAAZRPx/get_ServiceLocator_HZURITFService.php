<?php

namespace ContainerOAAZRPx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HZURITFService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.hZURITF' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.hZURITF'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\AccueilController::login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\AccueilController::verifyUserEmail' => ['privates', '.service_locator.1Z9fEX7', 'get_ServiceLocator_1Z9fEX7Service', true],
            'App\\Controller\\CatController::catmodif' => ['privates', '.service_locator.YgYapZ6', 'get_ServiceLocator_YgYapZ6Service', true],
            'App\\Controller\\CatController::contactform' => ['privates', '.service_locator.YgYapZ6', 'get_ServiceLocator_YgYapZ6Service', true],
            'App\\Controller\\FormContactController::contactform' => ['privates', '.service_locator.TaSiNLN', 'get_ServiceLocator_TaSiNLNService', true],
            'App\\Controller\\MailerController::sendEmail' => ['privates', '.service_locator.uVvF4gL', 'get_ServiceLocator_UVvF4gLService', true],
            'App\\Controller\\MailerController::sendEmailcmd' => ['privates', '.service_locator.uVvF4gL', 'get_ServiceLocator_UVvF4gLService', true],
            'App\\Controller\\PanierController::paniersendcmd' => ['privates', '.service_locator.UzX5Owo', 'get_ServiceLocator_UzX5OwoService', true],
            'App\\Controller\\ProfilController::index' => ['privates', '.service_locator.ePU9SUT', 'get_ServiceLocator_EPU9SUTService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.OFjnN8j', 'get_ServiceLocator_OFjnN8jService', true],
            'App\\Controller\\RegistrationController::verifyUserEmail' => ['privates', '.service_locator.1Z9fEX7', 'get_ServiceLocator_1Z9fEX7Service', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\AccueilController:login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\AccueilController:verifyUserEmail' => ['privates', '.service_locator.1Z9fEX7', 'get_ServiceLocator_1Z9fEX7Service', true],
            'App\\Controller\\CatController:catmodif' => ['privates', '.service_locator.YgYapZ6', 'get_ServiceLocator_YgYapZ6Service', true],
            'App\\Controller\\CatController:contactform' => ['privates', '.service_locator.YgYapZ6', 'get_ServiceLocator_YgYapZ6Service', true],
            'App\\Controller\\FormContactController:contactform' => ['privates', '.service_locator.TaSiNLN', 'get_ServiceLocator_TaSiNLNService', true],
            'App\\Controller\\MailerController:sendEmail' => ['privates', '.service_locator.uVvF4gL', 'get_ServiceLocator_UVvF4gLService', true],
            'App\\Controller\\MailerController:sendEmailcmd' => ['privates', '.service_locator.uVvF4gL', 'get_ServiceLocator_UVvF4gLService', true],
            'App\\Controller\\PanierController:paniersendcmd' => ['privates', '.service_locator.UzX5Owo', 'get_ServiceLocator_UzX5OwoService', true],
            'App\\Controller\\ProfilController:index' => ['privates', '.service_locator.ePU9SUT', 'get_ServiceLocator_EPU9SUTService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.OFjnN8j', 'get_ServiceLocator_OFjnN8jService', true],
            'App\\Controller\\RegistrationController:verifyUserEmail' => ['privates', '.service_locator.1Z9fEX7', 'get_ServiceLocator_1Z9fEX7Service', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\AccueilController::login' => '?',
            'App\\Controller\\AccueilController::verifyUserEmail' => '?',
            'App\\Controller\\CatController::catmodif' => '?',
            'App\\Controller\\CatController::contactform' => '?',
            'App\\Controller\\FormContactController::contactform' => '?',
            'App\\Controller\\MailerController::sendEmail' => '?',
            'App\\Controller\\MailerController::sendEmailcmd' => '?',
            'App\\Controller\\PanierController::paniersendcmd' => '?',
            'App\\Controller\\ProfilController::index' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\RegistrationController::verifyUserEmail' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\AccueilController:login' => '?',
            'App\\Controller\\AccueilController:verifyUserEmail' => '?',
            'App\\Controller\\CatController:catmodif' => '?',
            'App\\Controller\\CatController:contactform' => '?',
            'App\\Controller\\FormContactController:contactform' => '?',
            'App\\Controller\\MailerController:sendEmail' => '?',
            'App\\Controller\\MailerController:sendEmailcmd' => '?',
            'App\\Controller\\PanierController:paniersendcmd' => '?',
            'App\\Controller\\ProfilController:index' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\RegistrationController:verifyUserEmail' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
