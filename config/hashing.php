<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Hash Driver
    |--------------------------------------------------------------------------
    |
    | Opsi ini mengontrol driver hash default yang akan digunakan untuk mengenkripsi
    | kata sandi di aplikasi Anda. Secara default, algoritma bcrypt digunakan;
    | namun, Anda bebas untuk mengubah opsi ini jika diinginkan.
    |
    | Didukung: "bcrypt", "argon", "argon2id"
    |
    */

    'driver' => 'bcrypt',

    /*
    |--------------------------------------------------------------------------
    | Bcrypt Options
    |--------------------------------------------------------------------------
    |
    | Di sini Anda dapat menentukan konfigurasi opsi yang harus digunakan saat
    | kata sandi di-hash menggunakan algoritma Bcrypt. Ini memungkinkan Anda
    | untuk mengontrol berapa lama waktu yang dibutuhkan untuk mengenkripsi kata sandi.
    |
    */

    'bcrypt' => [
        'rounds' => env('BCRYPT_ROUNDS', 10),
    ],

    /*
    |--------------------------------------------------------------------------
    | Argon Options
    |--------------------------------------------------------------------------
    |
    | Di sini Anda dapat menentukan konfigurasi opsi yang harus digunakan saat
    | kata sandi di-hash menggunakan algoritma Argon. Ini memungkinkan Anda
    | untuk mengontrol berapa lama waktu yang dibutuhkan untuk mengenkripsi kata sandi.
    |
    */

    'argon' => [
        'memory' => 65536,
        'threads' => 1,
        'time' => 4,
    ],

];

