<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'admin' => [[], ['_controller' => 'App\\Controller\\Admin\\DashboardController::index'], [], [['text', '/admin']], [], [], []],
    'dish.view' => [[], ['_controller' => 'App\\Controller\\DishControlllerController::index'], [], [['text', '/dish/']], [], [], []],
    'dish.create' => [[], ['_controller' => 'App\\Controller\\DishControlllerController::create'], [], [['text', '/dish/create']], [], [], []],
    'dish.delete' => [['id'], ['_controller' => 'App\\Controller\\DishControlllerController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/dish/delete']], [], [], []],
    'dish.view_img' => [['id'], ['_controller' => 'App\\Controller\\DishControlllerController::view_img'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/dishview_img']], [], [], []],
    'dish.view_cheap_dishes' => [[], ['_controller' => 'App\\Controller\\DishControlllerController::view_cheap_dishes'], [], [['text', '/dish/view_cheap_dishes']], [], [], []],
    'app_home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], [], []],
    'start' => [[], ['_controller' => 'App\\Controller\\HomeController::start'], [], [['text', '/start']], [], [], []],
    'app_liste_index' => [[], ['_controller' => 'App\\Controller\\ListeController::index'], [], [['text', '/liste/']], [], [], []],
    'app_liste_new' => [[], ['_controller' => 'App\\Controller\\ListeController::new'], [], [['text', '/liste/new']], [], [], []],
    'app_liste_show' => [['id'], ['_controller' => 'App\\Controller\\ListeController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/liste']], [], [], []],
    'app_liste_edit' => [['id'], ['_controller' => 'App\\Controller\\ListeController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/liste']], [], [], []],
    'app_liste_delete' => [['id'], ['_controller' => 'App\\Controller\\ListeController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/liste']], [], [], []],
    'mail' => [[], ['_controller' => 'App\\Controller\\MailerController::sendEmail'], [], [['text', '/mail']], [], [], []],
    'app_menu' => [[], ['_controller' => 'App\\Controller\\MenuController::index'], [], [['text', '/menu']], [], [], []],
    'app_order' => [[], ['_controller' => 'App\\Controller\\OrderController::index'], [], [['text', '/order']], [], [], []],
    'order_dish' => [['id'], ['_controller' => 'App\\Controller\\OrderController::order'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/order']], [], [], []],
    'status' => [['id', 'status'], ['_controller' => 'App\\Controller\\OrderController::status'], [], [['variable', ',', '[^/]++', 'status', true], ['variable', '/', '[^/,]++', 'id', true], ['text', '/status']], [], [], []],
    'order_delete' => [['id'], ['_controller' => 'App\\Controller\\OrderController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/order_delete']], [], [], []],
    'app_registration' => [[], ['_controller' => 'App\\Controller\\RegistrationController::index'], [], [['text', '/reg']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
];
