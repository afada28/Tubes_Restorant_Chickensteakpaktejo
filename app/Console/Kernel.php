<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        // Mengirim laporan penjualan setiap hari pukul 23:00
        $schedule->command('sales:report')->dailyAt('23:00');

        // Sinkronisasi stok bahan baku setiap hari pukul 02:00
        $schedule->command('stock:sync')->dailyAt('02:00');
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
