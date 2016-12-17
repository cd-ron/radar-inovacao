<?php

return [
    'driver' => 'eloquent',
    'model' => App\Auth\Models\User::class,
    'table' => 'users',


    'password' => [
        'email' => 'emails.password',
        'table' => 'password_resets',
        'expire' => 60,
    ],

];
