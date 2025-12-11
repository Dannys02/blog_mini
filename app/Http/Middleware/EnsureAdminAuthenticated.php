<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnsureAdminAuthenticated
{
    public function handle(Request $request, Closure $next)
    {
        // Jika admin belum login
        if (!Auth::guard('admin')->check()) {
            return redirect('/admin/login');
        }

        // Admin sudah login → lanjut
        return $next($request);
    }
}
