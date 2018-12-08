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
    'facebook' => [
        'client_id' => '2200465533538036',
        'client_secret' => '1683ca72a20428c2f7400a900a0a7e85',
        'redirect' => 'https://localhost/restLaravel/public/social/callback/facebook',
    ],
    'google' => [
        'client_id' => '453500404156-lrd4re2i5rd6lai8dcsr13er6ptdgkai.apps.googleusercontent.com',
        'client_secret' => '_Jvo74J4tBp60ti_vHDJdGYX',
        'redirect' => 'http://localhost/restLaravel/public/social/callback/google',
    ],

];
