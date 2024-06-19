<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Auth\UserLoginController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

// User login routes
Route::get('login', [UserLoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [UserLoginController::class, 'login']);

// Admin login routes
Route::get('admin/login', [AdminController::class, 'loginForm'])->name('admin.login');
Route::post('admin/login', [AdminController::class, 'store']);

// Admin authenticated routes
Route::middleware(['auth:admin', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('dashboard'); //need to change later
    })->name('dashboard');
});
//authentication admin end

//authentication user start
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin-dashboard'); // Ensure this view exists
    })->name('dashboard');
});
//authentication end

use App\Http\Controllers\TourPackageController;

// Route to show the details of a specific tour package
Route::get('/tour-packages/{id}', [TourPackageController::class, 'show'])->name('tour-packages.show');

use App\Http\Controllers\PackageController;
use App\Http\Controllers\BookingController;

// Route for the packages list page
Route::get('/packages', [PackageController::class, 'index'])->name('packages');

// Route for the package details page
Route::get('/packages/{id}', [PackageController::class, 'show'])->name('packages_details');

// Route for the booking details page
Route::get('/booking/create', [BookingController::class, 'create'])->name('booking.create');
Route::post('/booking/store', [BookingController::class, 'store'])->name('booking.store');

// Public package routes
Route::get('/tour-packages/{id}', [TourPackageController::class, 'show'])->name('tour-packages.show');
Route::get('/packages', [PackageController::class, 'index'])->name('packages');
Route::get('/packages/{id}', [PackageController::class, 'show'])->name('packages_details');
Route::get('/booking/create', [BookingController::class, 'create'])->name('booking.create');
Route::post('/booking/store', [BookingController::class, 'store'])->name('booking.store');
