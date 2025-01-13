<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |--------------------------------------------------------------------------
    |
    | Di sini Anda dapat mengonfigurasi pengaturan untuk berbagi sumber daya lintas
    | atau "CORS". Ini menentukan operasi lintas sumber daya yang dapat dieksekusi
    | di browser web. Anda bebas menyesuaikan pengaturan ini sesuai kebutuhan.
    |
    | Untuk mempelajari lebih lanjut: https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS
    |
    */

    'paths' => ['api/*', 'sanctum/csrf-cookie'],

    'allowed_methods' => ['*'],

    'allowed_origins' => ['*'],

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['*'],

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => false,

];

