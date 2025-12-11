<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticatedAdmin
{
    public function handle($request, Closure $next)
{
    if (Auth::guard('admin')->check() && $request->route()->uri() === 'admin/login') {
        return redirect('/admin/dashboard');
    }

    return $next($request);
}

}
