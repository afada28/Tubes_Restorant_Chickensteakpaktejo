<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        // Jika permintaan berasal dari API, kembalikan respons JSON
        if ($request->expectsJson()) {
            return null;
        }

        // Jika pengguna tidak diautentikasi, arahkan ke halaman login
        return route('login');
    }

    /**
     * Handle unauthenticated users and log the event.
     */
    protected function unauthenticated($request, array $guards)
    {
        // Log aktivitas pengguna tidak diautentikasi
        Log::warning('Akses tidak sah terdeteksi', [
            'ip' => $request->ip(),
            'url' => $request->url(),
        ]);

        // Jika permintaan API, kembalikan respons JSON
        if ($request->expectsJson()) {
            abort(response()->json([
                'success' => false,
                'message' => 'Tidak diautentikasi. Silakan login untuk melanjutkan.',
            ], 401));
        }

        parent::unauthenticated($request, $guards);
    }
}

