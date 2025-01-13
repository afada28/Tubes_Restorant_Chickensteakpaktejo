<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance as Middleware;

class PreventRequestsDuringMaintenance extends Middleware
{
    /**
     * The URIs that should be reachable while maintenance mode is enabled.
     *
     * @var array<int, string>
     */
    protected $except = [
        // Halaman utama restoran untuk pemberitahuan pelanggan
        '/home',

        // Endpoint API untuk memantau status sistem
        '/api/status',

        // Halaman statis informasi cabang restoran
        '/branches-info',
    ];
}

