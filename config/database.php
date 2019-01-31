<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Database Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the database connections below you wish
    | to use as your default connection for all database work. Of course
    | you may use many connections at once using the Database library.
    |
    */

    'default' => env('UIPJ_CONNECTION', 'uipj'),

    /*
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the database connections setup for your application.
    | Of course, examples of configuring each database platform that is
    | supported by Laravel is shown below to make development simple.
    |
    |
    | All database work in Laravel is done through the PHP PDO facilities
    | so make sure you have the driver for your particular database of
    | choice installed on your machine before you begin development.
    |
    */

    'connections' => [
        'uipj' => [
            'driver' => 'mysql',
            'host' => env('UIPJ_HOST', '127.0.0.1'),
            'port' => env('UIPJ_PORT', '3306'),
            'database' => env('UIPJ_DATABASE', 'forge'),
            'username' => env('UIPJ_USERNAME', 'forge'),
            'password' => env('UIPJ_PASSWORD', ''),
            'unix_socket' => env('UIPJ_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'strict' => false,
            'engine' => null,
        ],

        'component' => [
            'driver' => 'mysql',
            'host' => env('COMPONENT_HOST', '192.108.24.155'),
            'port' => env('COMPONENT_PORT', '3306'),
            'database' => env('COMPONENT_DATABASE', 'forge'),
            'username' => env('COMPONENT_USERNAME', 'forge'),
            'password' => env('COMPONENT_PASSWORD', ''),
            'unix_socket' => env('COMPONENT_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'strict' => false,
            'engine' => null,
        ],

        'uatuipj' => [
            'driver' => 'mysql',
            'host' => env('UATUIPJ_HOST', '192.108.24.155'),
            'port' => env('UATUIPJ_PORT', '3306'),
            'database' => env('UATUIPJ_DATABASE', 'forge'),
            'username' => env('UATUIPJ_USERNAME', 'forge'),
            'password' => env('UATUIPJ_PASSWORD', ''),
            'unix_socket' => env('UATUIPJ_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'strict' => false,
            'engine' => null,
        ],

        'desaparecidos' => [
            'driver' => 'mysql',
            'host'      => env('DB_HOST_DESAPARECIDOS', '127.0.0.1'),
            'port'      => env('DB_PORT_DESAPARECIDOS', '3306'),
            'database'  => env('DB_DATABASE_DESAPARECIDOS', 'forge'),
            'username'  => env('DB_USERNAME_DESAPARECIDOS', 'forge'),
            'password'  => env('DB_PASSWORD_DESAPARECIDOS' ,''),
            'unix_socket' => env('DB_SOCKET_DESAPARECIDOS', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'strict' => false,
            'engine' => null,
        ],
        'vrr' => [
            'driver' => 'mysql',
            'host'      => env('DB_HOST_VRR', '127.0.0.1'),
            'port'      => env('DB_PORT_VRR', '3306'),
            'database'  => env('DB_DATABASE_VRR', 'forge'),
            'username'  => env('DB_USERNAME_VRR', 'forge'),
            'password'  => env('DB_PASSWORD_VRR' ,''),
            'unix_socket' => env('DB_SOCKET_VRR', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'strict' => false,
            'engine' => null,
        ],
        'legacy' => [
            'driver' => 'sqlsrv',
            'host' => env('LEGACY_HOST', '192.108.24.157'),
            'port' => env('LEGACY_PORT', '1433'),
            'database' => env('LEGACY_DATABASE', ''),
            'username' => env('LEGACY_USERNAME', 'reader'),
            'password' => env('LEGACY_PASSWORD', 'Read3R_1'),
            'charset' => 'utf8',
            'prefix' => '',
        ],
        'sqlite' => [
            'driver' => 'sqlite',
            'database' => env('DB_DATABASE', database_path('database.sqlite')),
            'prefix' => '',
        ],
        'pgsql' => [
            'driver' => 'pgsql',
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '5432'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'schema' => 'public',
            'sslmode' => 'prefer',
        ],
        'sqlsrv' => [
            'driver' => 'sqlsrv',
            'host' => env('DB_HOST', 'localhost'),
            'port' => env('DB_PORT', '1433'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => 'utf8',
            'prefix' => '',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Migration Repository Table
    |--------------------------------------------------------------------------
    |
    | This table keeps track of all the migrations that have already run for
    | your application. Using this information, we can determine which of
    | the migrations on disk haven't actually been run in the database.
    |
    */

    'migrations' => 'migrations',

    /*
    |--------------------------------------------------------------------------
    | Redis Databases
    |--------------------------------------------------------------------------
    |
    | Redis is an open source, fast, and advanced key-value store that also
    | provides a richer set of commands than a typical key-value systems
    | such as APC or Memcached. Laravel makes it easy to dig right in.
    |
    */

    'redis' => [

        'client' => 'predis',

        'default' => [
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'password' => env('REDIS_PASSWORD', null),
            'port' => env('REDIS_PORT', 6379),
            'database' => 0,
        ],

    ],

];
