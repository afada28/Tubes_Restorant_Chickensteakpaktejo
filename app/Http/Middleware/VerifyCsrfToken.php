<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        // Mengecualikan API untuk pemesanan dan pembayaran
        'api/orders/*',         // Endpoint pemesanan makanan
        'api/payment/*',        // Endpoint pembayaran pelanggan
        'api/notify/*',         // Endpoint untuk notifikasi atau webhook
        'webhook/payment-gateway', // Webhook dari gateway pembayaran
    ];
}

