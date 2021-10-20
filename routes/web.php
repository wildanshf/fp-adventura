<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\TravelPackageController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/detail', [DetailController::class, 'index']);

Route::prefix('admin')
    ->middleware(['auth', 'isAdmin'])
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])
            ->name('dashboard');
        
        // Route::resource('travel-package', TravelPackageController::class);
        Route::get('travel-package', [TravelPackageController::class, 'index'])
            ->name('travel-package');
});

Route::get('login', [LoginController::class, 'index'])
    ->middleware('guest');
Route::post('authenticate', [LoginController::class, 'authenticate']);
Route::post('logout', [LoginController::class, 'logout']);

Route::get('register', [RegisterController::class, 'index'])
    ->middleware('guest');
Route::post('register', [RegisterController::class, 'store']);

Route::post('profile', [ProfileController::class, 'index']);