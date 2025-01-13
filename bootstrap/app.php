<?php

/*
|--------------------------------------------------------------------------
| Create The Application
|--------------------------------------------------------------------------
|
| Membuat instance aplikasi Laravel baru yang akan digunakan sebagai
| "glue" untuk semua komponen Laravel. Aplikasi ini adalah IoC container
| untuk sistem yang mengikat berbagai bagian bersama.
|
*/

$app = new Illuminate\Foundation\Application(
    $_ENV['APP_BASE_PATH'] ?? dirname(__DIR__)
);

/*
|--------------------------------------------------------------------------
| Bind Important Interfaces
|--------------------------------------------------------------------------
|
| Mengikat beberapa antarmuka penting ke dalam container. Kernel bertugas
| melayani permintaan masuk ke aplikasi baik dari web maupun CLI.
| Penyesuaian ini memastikan semua komponen berjalan sesuai kebutuhan
| sistem manajemen restoran Chicken Steak Pak Tejo.
|
*/

$app->singleton(
    Illuminate\Contracts\Http\Kernel::class,
    App\Http\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Console\Kernel::class,
    App\Console\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    App\Exceptions\Handler::class
);

/*
|--------------------------------------------------------------------------
| Return The Application
|--------------------------------------------------------------------------
|
| Script ini mengembalikan instance aplikasi. Instance ini diberikan ke
| script pemanggil agar proses membangun instance dapat dipisahkan dari
| eksekusi aplikasi dan pengiriman respons. Dikustomisasi untuk mendukung
| operasional Chicken Steak Pak Tejo.
|
*/

return $app;

