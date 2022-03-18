<?php

return [

    /*
     * If enabled for voyager-bread-team package.
     */
    'enabled' => env('VOYAGER_BREAD_TEAM_ENABLED', true),

    /*
     * The config_key for voyager-bread-team package.
     */
    'config_key' => env('VOYAGER_BREAD_TEAM_CONFIG_KEY', 'joy-voyager-bread-team'),

    /*
     * The route_prefix for voyager-bread-team package.
     */
    'route_prefix' => env('VOYAGER_BREAD_TEAM_ROUTE_PREFIX', 'joy-voyager-bread-team'),

    /*
    |--------------------------------------------------------------------------
    | Controllers config
    |--------------------------------------------------------------------------
    |
    | Here you can specify voyager controller settings
    |
    */

    'controllers' => [
        'namespace' => 'Joy\\VoyagerBreadTeam\\Http\\Controllers',
    ],
];
