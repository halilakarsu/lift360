<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LiftController;

Route::get('/', function () {
    if (auth()->check()) {
        return redirect()->route('dashboard');
    }
    return redirect()->route('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    // Sadece Süper Adminlerin Girebileceği Yerler
    Route::middleware('role:super_admin')->group(function () {
        Route::resource('companies', CompanyController::class);
        Route::resource('users', UserController::class);
    });

    // Süper Admin, Firma Admin ve Teknikerlerin Girebileceği Yerler
    Route::middleware('role:super_admin|firma_admin|tekniker')->group(function () {
        Route::resource('lifts', LiftController::class);
    });
});

require __DIR__ . '/auth.php';
