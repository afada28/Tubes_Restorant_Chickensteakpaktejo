<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Authentication Configuration
    |--------------------------------------------------------------------------
    |
    | Konfigurasi ini mengatur guard dan opsi reset password default.
    | Untuk sistem Chicken Steak Pak Tejo, guard web cukup digunakan
    | untuk mengelola autentikasi admin, kasir, dan manajer.
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
    | Guard digunakan untuk mengelola cara autentikasi pengguna.
    | Guard default menggunakan session storage dan model Eloquent.
    | Anda dapat menambahkan guard tambahan seperti "admin" jika dibutuhkan.
    |
    */

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],
        // Tambahkan guard tambahan untuk admin jika perlu:
        // 'admin' => [
        //     'driver' => 'session',
        //     'provider' => 'admins',
        // ],
    ],

    /*
    |--------------------------------------------------------------------------
    | User Providers
    |--------------------------------------------------------------------------
    |
    | Provider menentukan bagaimana pengguna diambil dari database.
    | Untuk sistem ini, pengguna menggunakan model `App\Models\User`.
    | Anda dapat menambahkan provider tambahan untuk peran khusus.
    |
    */

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\Models\User::class,
        ],

        // Contoh untuk provider admin:
        // 'admins' => [
        //     'driver' => 'eloquent',
        //     'model' => App\Models\Admin::class,
        // ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Password Reset Configuration
    |--------------------------------------------------------------------------
    |
    | Atur pengaturan reset password. Token reset akan berlaku selama
    | 60 menit secara default. Anda dapat menyesuaikan ini sesuai kebutuhan.
    |
    */

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_reset_tokens',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Password Confirmation Timeout
    |--------------------------------------------------------------------------
    |
    | Timeout konfirmasi password default adalah 3 jam (10800 detik).
    | Anda dapat menyesuaikan waktu ini jika diperlukan.
    |
    */

    'password_timeout' => 10800,

];

