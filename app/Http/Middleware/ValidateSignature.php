<?php

namespace App\Http\Middleware;

use Illuminate\Routing\Middleware\ValidateSignature as Middleware;

class ValidateSignature extends Middleware
{
    /**
     * The names of the query string parameters that should be ignored.
     *
     * @var array<int, string>
     */
    protected $except = [
        // Mengabaikan parameter pelacakan dan pemasaran
        'fbclid',          // Facebook Click ID
        'utm_campaign',    // Kampanye pemasaran
        'utm_content',     // Konten pemasaran
        'utm_medium',      // Media pemasaran
        'utm_source',      // Sumber pemasaran
        'utm_term',        // Kata kunci pemasaran
        'promo_code',      // Kode promo pelanggan
        'ref',             // Parameter referensi
        'tracking_id',     // ID pelacakan pesanan
    ];
}

