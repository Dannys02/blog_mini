<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class EnsureUserAuthenticated
{
    public function handle($request, Closure $next)
    {
        // Jika admin belum login
        if (!Auth::guard('user')->check()) {
            return redirect('/login');
        }

        return $next($request);
    }
}
