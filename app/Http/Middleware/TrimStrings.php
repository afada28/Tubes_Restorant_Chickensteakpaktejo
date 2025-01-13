<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\TrimStrings as Middleware;

class TrimStrings extends Middleware
{
    /**
     * The names of the attributes that should not be trimmed.
     *
     * @var array<int, string>
     */
    protected $except = [
        'current_password',
        'password',
        'password_confirmation',
        'restaurant_name',       // Nama restoran
        'menu_item_description', // Deskripsi menu makanan
        'special_instructions',  // Instruksi khusus pelanggan
    ];
}

