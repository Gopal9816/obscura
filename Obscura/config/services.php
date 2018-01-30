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
        'client_id' => '2020425128203974',         // Your Facebook Client ID
        'client_secret' => '6dc21f83ccacde215c4c241a7c73d36a', // Your Facebook Client Secret
        'redirect' => 'http://localhost:8000/login/facebook/callback',
    ],

    'google' => [
        'client_id' => '1001992079995-qnceid9k9p5o0hln8j0vaf1ujabahpig.apps.googleusercontent.com',         // Your Google Client ID
        'client_secret' => 'jole6vveU5Gf9ZbF09dJ6_Hy', // Your Google Client Secret
        'redirect' => 'http://localhost:8000/login/google/callback',
    ],

];
