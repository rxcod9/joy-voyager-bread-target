<?php

return [

    /*
     * If enabled for voyager-bread-target package.
     */
    'enabled' => env('VOYAGER_BREAD_TARGET_ENABLED', true),

    /*
     * The config_key for voyager-bread-target package.
     */
    'config_key' => env('VOYAGER_BREAD_TARGET_CONFIG_KEY', 'joy-voyager-bread-target'),

    /*
     * The route_prefix for voyager-bread-target package.
     */
    'route_prefix' => env('VOYAGER_BREAD_TARGET_ROUTE_PREFIX', 'joy-voyager-bread-target'),

    /*
    |--------------------------------------------------------------------------
    | Controllers config
    |--------------------------------------------------------------------------
    |
    | Here you can specify voyager controller settings
    |
    */

    'controllers' => [
        'namespace' => 'Joy\\VoyagerBreadTarget\\Http\\Controllers',
    ],
];
