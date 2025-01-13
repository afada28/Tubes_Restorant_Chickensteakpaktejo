<?php

namespace App\Providers;

use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\ServiceProvider;

class BroadcastServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Mengatur rute broadcast untuk aplikasi
        Broadcast::routes();

        // Menghubungkan rute channel broadcast
        require base_path('routes/channels.php');

        // Konfigurasi tambahan untuk sistem restoran Chicken Steak Pak Tejo
        $this->configureBroadcasting();
    }

    /**
     * Konfigurasi tambahan untuk fitur broadcasting.
     */
    protected function configureBroadcasting(): void
    {
        Broadcast::channel(

