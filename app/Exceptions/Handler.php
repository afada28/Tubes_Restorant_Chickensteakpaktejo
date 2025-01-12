<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of exception types with their corresponding custom log levels.
     *
     * @var array<class-string<\Throwable>, \Psr\Log\LogLevel::*>
     */
    protected $levels = [
        //
    ];

    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<\Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            // Log setiap error ke file log
            Log::error('Error terjadi: ' . $e->getMessage());

            // Kirim notifikasi email ke admin jika error kritis
            if ($this->isCritical($e)) {
                $this->notifyAdmin($e);
            }
        });
    }

    /**
     * Tentukan apakah exception termasuk kategori kritis.
     */
    protected function isCritical(Throwable $e): bool
    {
        return $e instanceof \PDOException // Error database
            || $e->getCode() === 500;     // Internal server error
    }

    /**
     * Kirim notifikasi email ke admin saat terjadi error kritis.
     */
    protected function notifyAdmin(Throwable $e): void
    {
        $adminEmail = 'admin@chickensteakpaktejo.com';

        Mail::raw(
            "Error Kritis: " . $e->getMessage() . "\nFile: " . $e->getFile() . "\nLine: " . $e->getLine(),
            function ($message) use ($adminEmail) {
                $message->to($adminEmail)
                        ->subject('Notifikasi Error Kritis');
            }
        );
    }
}
