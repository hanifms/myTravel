<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//authentication start
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
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
Route::get('/booking/create/{id}', [BookingController::class, 'create'])->name('booking.create');
Route::post('/booking/store', [BookingController::class, 'store'])->name('booking.store');
