<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\TravelPackageController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\TransactionController;

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

Route::get('/detail/{slug}', [DetailController::class, 'index'])
    ->name('detail');

Route::prefix('admin')
    ->middleware(['auth', 'isAdmin'])
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])
            ->name('dashboard');
        
        Route::resource('travel-package', TravelPackageController::class); 
        Route::resource('gallery', GalleryController::class); 
        Route::resource('transaction', TransactionController::class);
});

Route::get('login', [LoginController::class, 'index'])
    ->middleware('guest');
Route::post('authenticate', [LoginController::class, 'authenticate']);
Route::post('logout', [LoginController::class, 'logout']);

Route::get('register', [RegisterController::class, 'index'])
    ->middleware('guest');
Route::post('register', [RegisterController::class, 'store']);

Route::post('profile', [ProfileController::class, 'index'])
    ->middleware('auth');