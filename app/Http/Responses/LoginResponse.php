<?php

namespace App\Http\Responses;

use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;
use Illuminate\Support\Facades\Auth;

class LoginResponse implements LoginResponseContract
{
    public function toResponse($request)
    {
        // Check which guard is authenticated and redirect accordingly
        if (Auth::guard('admin')->check()) {
            return redirect()->intended('admin/dashboard');
        }

        if (Auth::guard('web')->check()) {
            return redirect()->intended('dashboard');
        }

        return $request->wantsJson()
            ? response()->json(['two_factor' => false])
            : redirect()->intended('/home');
    }
}
