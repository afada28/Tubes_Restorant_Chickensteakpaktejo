<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Mailer
    |--------------------------------------------------------------------------
    |
    | Opsi ini mengontrol mailer default yang digunakan untuk mengirim pesan
    | email dari aplikasi Anda. Mailer alternatif dapat diatur dan digunakan
    | sesuai kebutuhan; namun, mailer ini yang akan digunakan secara default.
    |
    */

    'default' => env('MAIL_MAILER', 'smtp'),

    /*
    |--------------------------------------------------------------------------
    | Mailer Configurations
    |--------------------------------------------------------------------------
    |
    | Di sini Anda dapat mengonfigurasi semua mailer yang digunakan oleh aplikasi
    | Anda beserta pengaturan masing-masing. Beberapa contoh telah dikonfigurasi
    | untuk Anda dan Anda bebas menambahkan sendiri sesuai dengan kebutuhan.
    |
    | Laravel mendukung berbagai "transport" driver untuk digunakan saat mengirim
    | email. Anda akan menentukan yang mana yang Anda gunakan untuk mailer Anda
    | di bawah ini. Anda bebas menambahkan mailer tambahan sesuai kebutuhan.
    |
    | Supported: "smtp", "sendmail", "mailgun", "ses",
    |            "postmark", "log", "array", "failover"
    |
    */

    'mailers' => [
        'smtp' => [
            'transport' => 'smtp',
            'host' => env('MAIL_HOST', 'smtp.mailgun.org'),
            'port' => env('MAIL_PORT', 587),
            'encryption' => env('MAIL_ENCRYPTION', 'tls'),
            'username' => env('MAIL_USERNAME'),
            'password' => env('MAIL_PASSWORD'),
            'timeout' => null,
            'local_domain' => env('MAIL_EHLO_DOMAIN'),
        ],

        'ses' => [
            'transport' => 'ses',
        ],

        'mailgun' => [
            'transport' => 'mailgun',
            // 'client' => [
            //     'timeout' => 5,
            // ],
        ],

        'postmark' => [
            'transport' => 'postmark',
            // 'client' => [
            //     'timeout' => 5,
            // ],
        ],

        'sendmail' => [
            'transport' => 'sendmail',
            'path' => env('MAIL_SENDMAIL_PATH', '/usr/sbin/sendmail -bs -i'),
        ],

        'log' => [
            'transport' => 'log',
            'channel' => env('MAIL_LOG_CHANNEL'),
        ],

        'array' => [
            'transport' => 'array',
        ],

        'failover' => [
            'transport' => 'failover',
            'mailers' => [
                'smtp',
                'log',
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Global "From" Address
    |--------------------------------------------------------------------------
    |
    | Anda mungkin ingin agar semua email yang dikirim oleh aplikasi Anda berasal
    | dari alamat yang sama. Di sini, Anda dapat menentukan nama dan alamat
    | yang digunakan secara global untuk semua email yang dikirimkan oleh aplikasi.
    |
    */

    'from' => [
        'address' => env('MAIL_FROM_ADDRESS', 'contact@paktejo.com'),
        'name' => env('MAIL_FROM_NAME', 'Chicken Steak Pak Tejo'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Markdown Mail Settings
    |--------------------------------------------------------------------------
    |
    | Jika Anda menggunakan rendering email berbasis Markdown, Anda dapat mengonfigurasi
    | tema dan jalur komponen di sini, memungkinkan Anda untuk menyesuaikan desain
    | email. Atau, Anda bisa tetap menggunakan pengaturan default Laravel!
    |
    */

    'markdown' => [
        'theme' => 'default',

        'paths' => [
            resource_path('views/vendor/mail'),
        ],
    ],

];

