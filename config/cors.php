<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |--------------------------------------------------------------------------
    |
    | Below is a recommended configuration for CORS in Laravel 11.
    | You can adjust these settings based on your requirements for both
    | local development and production environments.
    |
    | For more information: https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS
    |
    */

    // Define the paths that should allow CORS
    'paths' => ['api/*', 'sanctum/csrf-cookie', '*'], // Add your API routes here

    // Allowed HTTP methods
    'allowed_methods' => ['GET', 'POST', 'PUT', 'PATCH', 'DELETE', 'OPTIONS'],

    // Allowed origins
    'allowed_origins' => ['*'],

    // Allowed origin patterns (for dynamic subdomains, if necessary)
    'allowed_origins_patterns' => [],

    // Allowed headers
    'allowed_headers' => ['Content-Type', 'Authorization', 'X-Requested-With', 'Accept'],

    // Headers that are exposed to the browser
    'exposed_headers' => ['Authorization'],

    // Cache duration for preflight requests
    'max_age' => 0, // 24 hours

    // Whether credentials are supported
    'supports_credentials' => false,

];
