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
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'firebase' => [
        'api_key' => 'AIzaSyCzViE8IAu9C8esNsZqcpaTHftJ1M8DCtQ',
        'auth_domain' => 'laravel-firebase-4d2a9.firebaseapp.com',
        'database_url' => 'https://laravel-firebase-4d2a9-default-rtdb.firebaseio.com/',
        'project_id' => 'laravel-firebase-4d2a9',
        'storage_bucket' => 'laravel-firebase-4d2a9.appspot.com',
        'messaging_sender_id' => '274280698733',
        'app_id' => '1:274280698733:web:304fa35d3cf1bac7214064',
        'measurement_id' => 'G-Z7ZZ4J4L7L',
    ],

];
