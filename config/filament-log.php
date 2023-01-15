<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Pages
    |--------------------------------------------------------------------------
    |
    | You may replace the registered page and alter to your own liking.
    |
    */

    'pages' => [
        RyanChandler\FilamentLog\Logs::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Paths
    |--------------------------------------------------------------------------
    |
    | An array of paths that should be traversed to find log files.
    |
    */

    'paths' => [
        storage_path('logs'),
    ],

];
