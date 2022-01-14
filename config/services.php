<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'google' => [
        'client_id' => '445761969633-0f084fkg8kkd6cn5iomfoq6s742a7drs.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'http://127.0.0.1:8000/dangnhap/google/callback',
    ],
    'facebook' => [
        'client_id' => '432892221720936',
        'client_secret' => 'f56f09823bdf8a2568d78b0c0a653d0f',
        'redirect' => 'http://127.0.0.1:8000/dangnhap/facebook/callback',
    ],
];
