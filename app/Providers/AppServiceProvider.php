<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Mendaftarkan layanan tambahan jika diperlukan di masa mendatang
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Mengatur panjang default string untuk database (MySQL)
        Schema::defaultStringLength(191);

        // Menggunakan Bootstrap untuk pagination
        Paginator::useBootstrap();

        // Konfigurasi tambahan untuk sistem restoran Chicken Steak Pak Tejo
        $this->configureRestaurantSettings();
    }

    /**
     * Konfigurasi tambahan untuk sistem restoran.
     */
    protected function configureRestaurantSettings(): void
    {
        // Contoh konfigurasi global untuk sistem restoran
        config([
            'restaurant.name' => 'Chicken Steak Pak Tejo',
            'restaurant.currency' => 'IDR',
            'restaurant.timezone' => 'Asia/Jakarta',
            'restaurant.support_email' => 'support@chickensteakpaktejo.com',
        ]);
    }
}

