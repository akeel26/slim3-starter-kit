<?php
return [
    // ---------------------------
    // Settings
    // ---------------------------
    'settings' => [
        'displayErrorDetails' => true, // When true, additional information about exceptions are displayed by the default error handler
        'addContentLengthHeader' => false, // When true, Slim will add a Content-Length header to the response. If you are using a runtime analytics tool, such as New Relic, then this should be disabled.
        'determineRouteBeforeAppMiddleware' => false, // When true, the route is calculated before any middleware is executed. This means that you can inspect route parameters in middleware if you need to

        'renderer' => [
            'template_path' => __DIR__ . '/../templates/',
        ],

        // DB settings
        'db' => [
            'driver' => 'mysql',
            'host' => 'mysql',
            'database' => 'snc-dev',
            'username' => 'root',
            'password' => 'root',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ],
        
        // Monolog settings
        'logger' => [
            'name' => 'soap_server',
            'path' => __DIR__ . '/../logs/app.log',
            'level' => \Monolog\Logger::DEBUG,
        ],
    ],

    // ---------------------------
    // Errors
    // ---------------------------
    'notFoundHandler' => function ($container) {
        return function ($request, $response) use ($container) {
            return $container['response']
                ->withStatus(404)
                ->withHeader('Content-Type', 'text/html')
                ->write('Page not found');
        };
    },

    'notAllowedHandler' => function ($container) {
        return function ($request, $response) use ($container) {
            return $container['response']
                ->withStatus(405)
                ->withHeader('Content-Type', 'text/html')
                ->write('Method not allowed');
        };
    },

    // ---------------------------
    // Constants
    // ---------------------------
    'BASE_DIR' => __DIR__ . '/..'

];
