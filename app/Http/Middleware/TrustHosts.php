<?php

namespace App\Http\Middleware;

use Illuminate\Http\Middleware\TrustHosts as Middleware;

class TrustHosts extends Middleware
{
    /**
     * Get the host patterns that should be trusted.
     *
     * @return array<int, string|null>
     */
    public function hosts(): array
    {
        return [
            $this->allSubdomainsOfApplicationUrl(),

            // Menambahkan subdomain yang dipercaya untuk sistem restoran
            'admin.chickensteakpaktejo.com',
            'staff.chickensteakpaktejo.com',
            'customer.chickensteakpaktejo.com',
        ];
    }
}

