<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticateAdmin
{
    public function handle(Request $request, Closure $next, ...$guards)
    {
        if (!Auth::guard('admin')->check()) {
            return redirect()->route('admin.login'); // Adjust this route as needed
        }

        return $next($request);
    }
}
