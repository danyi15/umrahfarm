<?php

namespace App\Http\Middleware;

use Closure;

class PreventRequestsFromSuspiciousSource
{
    public function handle($request, Closure $next)
    {
        // Logika middleware
        return $next($request);
    }
}

