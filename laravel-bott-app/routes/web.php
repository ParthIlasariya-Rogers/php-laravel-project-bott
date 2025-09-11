<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;


// Routes helps to define the web routes for the application.
// These routes are loaded by the RouteServiceProvider within a group which



Route::get('/', function () {
    return view('welcome');
});

// Admin routes
Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
});

//Profile routes
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [AdminController::class, 'profile'])->name('profile.show');
    Route::post('/profile', [AdminController::class, 'updateProfile'])->name('profile.update');
}); 

// Authentication routes
