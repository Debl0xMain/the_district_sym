<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'app_accueil' => [[], ['_controller' => 'App\\Controller\\AccueilController::index'], [], [['text', '/']], [], [], []],
    'app_mlegal' => [[], ['_controller' => 'App\\Controller\\AccueilController::mlegal'], [], [['text', '/mentionslegales']], [], [], []],
    'app_cgu' => [[], ['_controller' => 'App\\Controller\\AccueilController::cgu'], [], [['text', '/cgu']], [], [], []],
    'app_Categorieadd' => [[], ['_controller' => 'App\\Controller\\CatController::contactform'], [], [['text', '/categorie_add']], [], [], []],
    'app_cat' => [[], ['_controller' => 'App\\Controller\\CatController::cat'], [], [['text', '/categorie']], [], [], []],
    'app_platcat' => [['libelle'], ['_controller' => 'App\\Controller\\CatController::platcat'], [], [['variable', '/', '[^/]++', 'libelle', true], ['text', '/search']], [], [], []],
    'app_platsearch' => [[], ['_controller' => 'App\\Controller\\CatController::platsearch'], [], [['text', '/search']], [], [], []],
    'app_contact' => [[], ['_controller' => 'App\\Controller\\FormContactController::contactform'], [], [['text', '/contact']], [], [], []],
    'app_mailer_sendemail' => [[], ['_controller' => 'App\\Controller\\MailerController::sendEmail'], [], [['text', '/email']], [], [], []],
    'app_platadd' => [[], ['_controller' => 'App\\Controller\\PlatController::platform'], [], [['text', '/plat_add']], [], [], []],
    'app_plat' => [[], ['_controller' => 'App\\Controller\\PlatController::cat'], [], [['text', '/plat']], [], [], []],
    'app_profil' => [[], ['_controller' => 'App\\Controller\\ProfilController::index'], [], [['text', '/profil']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_verify_email' => [[], ['_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], [], [['text', '/verify/email']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
];
