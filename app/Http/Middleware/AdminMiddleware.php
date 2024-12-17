<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Cek apakah pengguna adalah admin
        if (Auth::check() && Auth::user()->is_admin) {
            return $next($request); // Jika admin, lanjutkan
        }

        // Jika bukan admin, arahkan ke halaman lain
        return redirect()->route('dashboard');
    }
}

