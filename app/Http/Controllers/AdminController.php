<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Inquiry;

class AdminController extends Controller
{
    public function loginForm()
    {
        return view('auth.admin-login'); // Ensure this view exists
    }

    public function store(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function showInquiries()
    {
        $inquiries = Inquiry::all(); // Fetch all inquiries
        return view('admin.inquiries', compact('inquiries'));
    }
}
