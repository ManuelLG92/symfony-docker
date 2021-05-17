<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\Forum\\Index\\IndexController::index'], null, ['GET' => 0], null, false, false, null]],
        '/post/all' => [[['_route' => 'get_all_posts', '_controller' => 'App\\Controller\\Forum\\Post\\PostController::index'], null, ['GET' => 0], null, false, false, null]],
        '/post/create' => [[['_route' => 'create_post', '_controller' => 'App\\Controller\\Forum\\Post\\PostController::Create'], null, ['GET' => 0], null, false, false, null]],
        '/post/delete' => [[['_route' => 'edit_post', '_controller' => 'App\\Controller\\Forum\\Post\\PostController::Delete'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
