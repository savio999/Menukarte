<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/dish' => [[['_route' => 'dish.view', '_controller' => 'App\\Controller\\DishControlllerController::index'], null, null, null, true, false, null]],
        '/dish/create' => [[['_route' => 'dish.create', '_controller' => 'App\\Controller\\DishControlllerController::create'], null, null, null, false, false, null]],
        '/dish/view_cheap_dishes' => [[['_route' => 'dish.view_cheap_dishes', '_controller' => 'App\\Controller\\DishControlllerController::view_cheap_dishes'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/start' => [[['_route' => 'start', '_controller' => 'App\\Controller\\HomeController::start'], null, null, null, false, false, null]],
        '/liste' => [[['_route' => 'app_liste_index', '_controller' => 'App\\Controller\\ListeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/liste/new' => [[['_route' => 'app_liste_new', '_controller' => 'App\\Controller\\ListeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/mail' => [[['_route' => 'mail', '_controller' => 'App\\Controller\\MailerController::sendEmail'], null, null, null, false, false, null]],
        '/menu' => [[['_route' => 'app_menu', '_controller' => 'App\\Controller\\MenuController::index'], null, null, null, false, false, null]],
        '/order' => [[['_route' => 'app_order', '_controller' => 'App\\Controller\\OrderController::index'], null, null, null, false, false, null]],
        '/reg' => [[['_route' => 'app_registration', '_controller' => 'App\\Controller\\RegistrationController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/dish(?'
                    .'|/delete/([^/]++)(*:31)'
                    .'|view_img/([^/]++)(*:55)'
                .')'
                .'|/liste/([^/]++)(?'
                    .'|(*:81)'
                    .'|/edit(*:93)'
                    .'|(*:100)'
                .')'
                .'|/order(?'
                    .'|/([^/]++)(*:127)'
                    .'|_delete/([^/]++)(*:151)'
                .')'
                .'|/status/([^/,]++),([^/]++)(*:186)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:225)'
                    .'|wdt/([^/]++)(*:245)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:291)'
                            .'|router(*:305)'
                            .'|exception(?'
                                .'|(*:325)'
                                .'|\\.css(*:338)'
                            .')'
                        .')'
                        .'|(*:348)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        31 => [[['_route' => 'dish.delete', '_controller' => 'App\\Controller\\DishControlllerController::delete'], ['id'], null, null, false, true, null]],
        55 => [[['_route' => 'dish.view_img', '_controller' => 'App\\Controller\\DishControlllerController::view_img'], ['id'], null, null, false, true, null]],
        81 => [[['_route' => 'app_liste_show', '_controller' => 'App\\Controller\\ListeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        93 => [[['_route' => 'app_liste_edit', '_controller' => 'App\\Controller\\ListeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        100 => [[['_route' => 'app_liste_delete', '_controller' => 'App\\Controller\\ListeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        127 => [[['_route' => 'order_dish', '_controller' => 'App\\Controller\\OrderController::order'], ['id'], null, null, false, true, null]],
        151 => [[['_route' => 'order_delete', '_controller' => 'App\\Controller\\OrderController::delete'], ['id'], null, null, false, true, null]],
        186 => [[['_route' => 'status', '_controller' => 'App\\Controller\\OrderController::status'], ['id', 'status'], null, null, false, true, null]],
        225 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        245 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        291 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        305 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        325 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        338 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        348 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
