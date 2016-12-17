<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'mandrill' => [
        'secret' => env('MANDRILL_SECRET'),
    ],

    'ses' => [
        'key'    => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'stripe' => [
        'model'  => App\Auth\Models\User::class,
        'key'    => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
        'client_id' => '1530006957302624',
        'client_secret' => 'cc060f651828cd3ddc1f4c49e2827b4d',
        'redirect' => 'http://dimensionador.codeinapp.com.br/auth/facebook/callback',
    ],

    'google' => [
        'client_id' => '642594190838-74maehmc3eo0bts2r3din1ajd2t6ve1l.apps.googleusercontent.com',
        'client_secret' => 'mwCotnmI_WQKaPL2ZeFiJpA5',
        'redirect' => 'http://dimensionador.codeinapp.com.br/auth/google/callback',
    ],

    'linkedin' => [
        'client_id' => '77noh43f41cg99',
        'client_secret' => 'Z6iFKAQZARUfd5FL',
        'redirect' => 'http://dimensionador.codeinapp.com.br/auth/linkedin/callback',
    ],



];
