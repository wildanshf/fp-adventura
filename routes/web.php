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

Route::get('/', [HomeController::class, 'index']);

Route::get('/detail', [DetailController::class, 'index']);

Route::prefix('admin')
    ->middleware(['auth', 'isAdmin'])
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])
            ->name('dashboard');
        
        Route::resource('travel-package', 'App\Http\Controllers\Admin\TravelPackageController'); 
        Route::resource('gallery', 'App\Http\Controllers\Admin\GalleryController'); 
        // Route::get('travel-package', [TravelPackageController::class, 'index'])
        //     ->name('travel-package');
        // Route::get('travel-package.create', [TravelPackageController::class, 'create'])
        //     ->name('travel-package.create');
        // Route::post('travel-package.store', [TravelPackageController::class, 'store'])
        //     ->name('travel-package.store');
        // Route::get('travel-package.edit', [TravelPackageController::class, 'edit'])
        //     ->name('travel-package.edit');
        // Route::get('travel-package.update', [TravelPackageController::class, 'update'])
        //     ->name('travel-package.update');
        // Route::delete('travel-package.destroy', [TravelPackageController::class, 'destroy'])
        //     ->name('travel-package.destroy');
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