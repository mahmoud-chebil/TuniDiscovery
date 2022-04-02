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
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/accueil' => [[['_route' => 'accueil', '_controller' => 'App\\Controller\\AccueilController::index'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/devis' => [[['_route' => 'devis_index', '_controller' => 'App\\Controller\\DevisController::index'], null, ['GET' => 0], null, true, false, null]],
        '/devis/new' => [[['_route' => 'devis_new', '_controller' => 'App\\Controller\\DevisController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reservation/cd' => [[['_route' => 'reservation_cd_index', '_controller' => 'App\\Controller\\ReservationCdController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reservation/cd/ind' => [[['_route' => 'reservation_cd_indexback', '_controller' => 'App\\Controller\\ReservationCdController::indexb'], null, ['GET' => 0], null, false, false, null]],
        '/reservation/cd/listedevis' => [[['_route' => 'devis_indexd', '_controller' => 'App\\Controller\\ReservationCdController::devis'], null, ['GET' => 0], null, false, false, null]],
        '/reservation/cd/evenchoisi' => [[['_route' => 'evenchoisi', '_controller' => 'App\\Controller\\ReservationCdController::indexf'], null, ['GET' => 0], null, false, false, null]],
        '/reservation/cd/succes' => [[['_route' => 'succes', '_controller' => 'App\\Controller\\ReservationCdController::succes'], null, null, null, false, false, null]],
        '/reservation/cd/new' => [[['_route' => 'reservation_cd_new', '_controller' => 'App\\Controller\\ReservationCdController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/devis/([^/]++)(?'
                    .'|(*:187)'
                    .'|/edit(*:200)'
                    .'|(*:208)'
                .')'
                .'|/reservation/cd/([^/]++)(?'
                    .'|(*:244)'
                    .'|/edit(*:257)'
                    .'|(*:265)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        187 => [[['_route' => 'devis_show', '_controller' => 'App\\Controller\\DevisController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        200 => [[['_route' => 'devis_edit', '_controller' => 'App\\Controller\\DevisController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        208 => [[['_route' => 'devis_delete', '_controller' => 'App\\Controller\\DevisController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        244 => [[['_route' => 'reservation_cd_show', '_controller' => 'App\\Controller\\ReservationCdController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        257 => [[['_route' => 'reservation_cd_edit', '_controller' => 'App\\Controller\\ReservationCdController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        265 => [
            [['_route' => 'reservation_cd_delete', '_controller' => 'App\\Controller\\ReservationCdController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
