<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'app_accueil', '_controller' => 'App\\Controller\\AccueilController::index'], null, null, null, false, false, null]],
        '/mentionslegales' => [[['_route' => 'app_mlegal', '_controller' => 'App\\Controller\\AccueilController::mlegal'], null, null, null, false, false, null]],
        '/cgu' => [[['_route' => 'app_cgu', '_controller' => 'App\\Controller\\AccueilController::cgu'], null, null, null, false, false, null]],
        '/categorie_add' => [[['_route' => 'app_Categorieadd', '_controller' => 'App\\Controller\\CatController::contactform'], null, null, null, false, false, null]],
        '/categorie' => [[['_route' => 'app_cat', '_controller' => 'App\\Controller\\CatController::cat'], null, null, null, false, false, null]],
        '/search' => [[['_route' => 'app_platsearch', '_controller' => 'App\\Controller\\CatController::platsearch'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\FormContactController::contactform'], null, null, null, false, false, null]],
        '/email' => [[['_route' => 'app_mailer_sendemail', '_controller' => 'App\\Controller\\MailerController::sendEmail'], null, null, null, false, false, null]],
        '/plat_add' => [[['_route' => 'app_platadd', '_controller' => 'App\\Controller\\PlatController::platform'], null, null, null, false, false, null]],
        '/plat' => [[['_route' => 'app_plat', '_controller' => 'App\\Controller\\PlatController::cat'], null, null, null, false, false, null]],
        '/profil' => [[['_route' => 'app_profil', '_controller' => 'App\\Controller\\ProfilController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/search/([^/]++)(*:23)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        23 => [
            [['_route' => 'app_platcat', '_controller' => 'App\\Controller\\CatController::platcat'], ['libelle'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
