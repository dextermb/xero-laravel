<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Xero Laravel configuration
    |--------------------------------------------------------------------------
    |
    | This file is for storing the configuration for the Langley Foxall
    | Xero Laravel package.
    |
    */

    'apps' => [
        'default' => [
            'token'     => env('XERO_TOKEN'),
            'tenant_id' => env('XERO_TENANT_ID'),

            'client_id'     => env('XERO_CLIENT_ID'),
            'client_secret' => env('XERO_CLIENT_SECRET'),
            'redirect_uri'  => env('XERO_REDIRECT_URI'),
            'scope'         => env('XERO_SCOPE', 'openid email profile offline_access'),
        ],
    ],
];
