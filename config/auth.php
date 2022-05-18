<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Defaults
    |--------------------------------------------------------------------------
    |
    | This option controls the default authentication "guard" and password
    | reset options for your application. You may change these defaults
    | as required, but they're a perfect start for most applications.
    |
    */

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

    /*
    |--------------------------------------------------------------------------
    | Authentication Guards
    |--------------------------------------------------------------------------
    |
    | Next, you may define every authentication guard for your application.
    | Of course, a great default configuration has been defined for you
    | here which uses session storage and the Eloquent user provider.
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | Supported: "session", "token"
    |
    */

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],

        'api' => [
            'driver' => 'token',
            'provider' => 'users',
            'hash' => false,
        ],

        'idtable5' => [
            'redirectTo' => 'seal.home',
            'driver' => 'session',
            'provider' => 'idtable5',
        ],
        
        'idtable4' => [
            'redirectTo' => 'seal.home',
            'driver' => 'session',
            'provider' => 'idtable4',
        ],

        'idtable3' => [
            'redirectTo' => 'seal.home',
            'driver' => 'session',
            'provider' => 'idtable3',
        ],
        
        'idtable2' => [
            'redirectTo' => 'seal.home',
            'driver' => 'session',
            'provider' => 'idtable2',
        ],
        
        'idtable1' => [
            'redirectTo' => 'seal.home',
            'driver' => 'session',
            'provider' => 'idtable1',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | User Providers
    |--------------------------------------------------------------------------
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | If you have multiple user tables or models you may configure multiple
    | sources which represent each model / table. These sources may then
    | be assigned to any extra authentication guards you have defined.
    |
    | Supported: "database", "eloquent"
    |
    */

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\User::class,
        ],

        // 'users' => [
        //     'driver' => 'database',
        //     'table' => 'users',
        // ],
        'idtable5' => [
            'driver' => 'usersealprovider',
            'model' => App\idtable5::class,
        ],
        'idtable4' => [
            'driver' => 'usersealprovider',
            'model' => App\idtable4::class,
        ],
        'idtable3' => [
            'driver' => 'usersealprovider',
            'model' => App\idtable3::class,
        ],
        'idtable2' => [
            'driver' => 'usersealprovider',
            'model' => App\idtable2::class,
        ],
        'idtable1' => [
            'driver' => 'usersealprovider',
            'model' => App\idtable1::class,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Resetting Passwords
    |--------------------------------------------------------------------------
    |
    | You may specify multiple password reset configurations if you have more
    | than one user table or model in the application and you want to have
    | separate password reset settings based on the specific user types.
    |
    | The expire time is the number of minutes that the reset token should be
    | considered valid. This security feature keeps tokens short-lived so
    | they have less time to be guessed. You may change this as needed.
    |
    */

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
        'idtable5' => [
            'driver' => 'usersealprovider',
            'provider' => 'usersealprovider',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
        'idtable4' => [
            'driver' => 'usersealprovider',
            'provider' => 'usersealprovider',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
        'idtable3' => [
            'driver' => 'usersealprovider',
            'provider' => 'usersealprovider',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
        'idtable2' => [
            'driver' => 'usersealprovider',
            'provider' => 'usersealprovider',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
        'idtable1' => [
            'driver' => 'usersealprovider',
            'provider' => 'usersealprovider',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Password Confirmation Timeout
    |--------------------------------------------------------------------------
    |
    | Here you may define the amount of seconds before a password confirmation
    | times out and the user is prompted to re-enter their password via the
    | confirmation screen. By default, the timeout lasts for three hours.
    |
    */

    'password_timeout' => 10800,

];
