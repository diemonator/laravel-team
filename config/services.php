<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'google' => [
        'client_id'     => '226180410271-f7vo6b5h12nj3hkp2hgtnrhrnhorq3me.apps.googleusercontent.com',
        'client_secret' => 'iM0lWDQbCIwLYIY3SfY4Mg0R',
        'redirect'      => 'http://localhost:8000/auth/google/callback',
    ],

    'facebook' => [
        'client_id' => '1934921380170744',
        'client_secret' => 'e18d199cfe20374668f8ccae61e46b72',
        'redirect' => 'http://localhost:8000/callback',
    ],

];
