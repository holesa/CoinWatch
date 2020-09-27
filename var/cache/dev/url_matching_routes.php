<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'homepage', '_controller' => 'App\\Controller\\CoinController::coinsList'], null, null, null, false, false, null]],
        '/exchanges' => [[['_route' => 'exchanges', '_controller' => 'App\\Controller\\ExchangeController::exchangesList'], null, null, null, false, false, null]],
        '/search' => [[['_route' => 'search', '_controller' => 'App\\Controller\\SearchController::search'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/coin/([^/]++)(*:56)'
                .'|/exchange/([^/]++)(*:81)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        56 => [[['_route' => 'coin', '_controller' => 'App\\Controller\\CoinController::coin'], ['coin'], null, null, false, true, null]],
        81 => [
            [['_route' => 'exchange', '_controller' => 'App\\Controller\\ExchangeController::exchange'], ['exchange'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
