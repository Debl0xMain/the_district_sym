<?php

namespace ContainerMDL0hZG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_HelperService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.helper' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Security.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Security.php';

        return $container->privates['security.helper'] = new \Symfony\Bundle\SecurityBundle\Security(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'request_stack' => ['services', 'request_stack', 'getRequestStackService', false],
            'security.authenticator.managers_locator' => ['privates', 'security.authenticator.managers_locator', 'getSecurity_Authenticator_ManagersLocatorService', true],
            'security.authorization_checker' => ['privates', 'security.authorization_checker', 'getSecurity_AuthorizationCheckerService', false],
            'security.csrf.token_manager' => ['privates', 'security.csrf.token_manager', 'getSecurity_Csrf_TokenManagerService', true],
            'security.firewall.event_dispatcher_locator' => ['privates', 'security.firewall.event_dispatcher_locator', 'getSecurity_Firewall_EventDispatcherLocatorService', true],
            'security.firewall.map' => ['privates', 'security.firewall.map', 'getSecurity_Firewall_MapService', false],
            'security.token_storage' => ['privates', 'security.token_storage', 'getSecurity_TokenStorageService', false],
            'security.user_checker' => ['privates', 'security.user_checker', 'getSecurity_UserCheckerService', true],
        ], [
            'request_stack' => '?',
            'security.authenticator.managers_locator' => '?',
            'security.authorization_checker' => '?',
            'security.csrf.token_manager' => '?',
            'security.firewall.event_dispatcher_locator' => '?',
            'security.firewall.map' => '?',
            'security.token_storage' => '?',
            'security.user_checker' => '?',
        ]), ['dev' => NULL, 'main' => new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Security\\AppCustomAuthenticator' => ['privates', 'App\\Security\\AppCustomAuthenticator', 'getAppCustomAuthenticatorService', true],
        ], [
            'App\\Security\\AppCustomAuthenticator' => '?',
        ])]);
    }
}
