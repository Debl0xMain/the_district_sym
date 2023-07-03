<?php

namespace ContainerXRLzEzj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMailServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\MailService' shared autowired service.
     *
     * @return \App\Service\MailService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Service/MailService.php';

        $a = ($container->privates['mailer.mailer'] ?? $container->load('getMailer_MailerService'));

        if (isset($container->privates['App\\Service\\MailService'])) {
            return $container->privates['App\\Service\\MailService'];
        }

        return $container->privates['App\\Service\\MailService'] = new \App\Service\MailService($a);
    }
}
