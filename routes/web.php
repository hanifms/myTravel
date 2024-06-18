<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware('admin:admin')->group(function () {
    Route::get('admin/login',[AdminController::class, 'loginForm']);
    Route::post('admin/login',[AdminController::class, 'store'])->name('
    admin.login');
});

//authentication admin start
Route::middleware(['auth:sanctum,admin', config('jetstream.auth_session'), 'verified',
])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('dashboard'); //need to change later
    })->name('dashboard');
});
//authentication admin end

//authentication user start
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
//authentication user end
