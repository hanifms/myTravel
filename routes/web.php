<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Auth\UserLoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TourPackageController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\BookingController;

// Public routes
Route::get('/', function () {
    return view('welcome');
});

// User login routes
Route::get('login', [UserLoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [UserLoginController::class, 'login']);

// Admin login routes
Route::get('admin/login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin/login', [AdminLoginController::class, 'login']);

// Admin authenticated routes
Route::middleware(['auth:admin', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard'); // Ensure this view exists
    })->name('admin.dashboard');

    Route::get('/admin/inquiries', [AdminController::class, 'showInquiries'])->name('admin.inquiries');
});

// User authenticated routes
Route::middleware(['auth', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard'); // Ensure this view exists
    })->name('dashboard');
});

// Public package routes
Route::get('/tour-packages/{id}', [TourPackageController::class, 'show'])->name('tour-packages.show');
Route::get('/packages', [PackageController::class, 'index'])->name('packages');
Route::get('/packages/{id}', [PackageController::class, 'show'])->name('packages_details');
Route::get('/booking/create/{id}', [BookingController::class, 'create'])->name('booking.create');
Route::post('/booking/store', [BookingController::class, 'store'])->name('booking.store');
