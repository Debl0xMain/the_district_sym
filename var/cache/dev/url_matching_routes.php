<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_accueil', '_controller' => 'App\\Controller\\AccueilController::index'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\AccueilController::verifyUserEmail'], null, null, null, false, false, null]],
        '/mentionslegales' => [[['_route' => 'app_mlegal', '_controller' => 'App\\Controller\\AccueilController::mlegal'], null, null, null, false, false, null]],
        '/cgu' => [[['_route' => 'app_cgu', '_controller' => 'App\\Controller\\AccueilController::cgu'], null, null, null, false, false, null]],
        '/categorie_add' => [[['_route' => 'app_Categorieadd', '_controller' => 'App\\Controller\\CatController::contactform'], null, null, null, false, false, null]],
        '/categorie' => [[['_route' => 'app_cat', '_controller' => 'App\\Controller\\CatController::cat'], null, null, null, false, false, null]],
        '/search' => [[['_route' => 'app_platsearch', '_controller' => 'App\\Controller\\CatController::platsearch'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\FormContactController::contactform'], null, null, null, false, false, null]],
        '/email' => [[['_route' => 'app_mailer_sendemail', '_controller' => 'App\\Controller\\MailerController::sendEmail'], null, null, null, false, false, null]],
        '/panier' => [[['_route' => 'app_panier', '_controller' => 'App\\Controller\\PanierController::panierajax'], null, null, null, false, false, null]],
        '/panierqte' => [[['_route' => 'app_panierqte', '_controller' => 'App\\Controller\\PanierController::panierajaxqte'], null, null, null, false, false, null]],
        '/panierdelete' => [[['_route' => 'app_panierdelete', '_controller' => 'App\\Controller\\PanierController::panierajaxdelete'], null, null, null, false, false, null]],
        '/panierdeleteall' => [[['_route' => 'app_panierdeleteall', '_controller' => 'App\\Controller\\PanierController::panierajaxdeleteall'], null, null, null, false, false, null]],
        '/commande' => [[['_route' => 'app_commande', '_controller' => 'App\\Controller\\PanierController::paniercmd'], null, null, null, false, false, null]],
        '/sendcommande' => [[['_route' => 'app_sendcommande', '_controller' => 'App\\Controller\\PanierController::paniersendcmd'], null, null, null, false, false, null]],
        '/plat_add' => [[['_route' => 'app_platadd', '_controller' => 'App\\Controller\\PlatController::platform'], null, null, null, false, false, null]],
        '/plat' => [[['_route' => 'app_plat', '_controller' => 'App\\Controller\\PlatController::cat'], null, null, null, false, false, null]],
        '/profil' => [[['_route' => 'app_profil', '_controller' => 'App\\Controller\\ProfilController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/search/([^/]++)(*:185)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        185 => [
            [['_route' => 'app_platcat', '_controller' => 'App\\Controller\\CatController::platcat'], ['libelle'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
