<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/detail', [DetailController::class, 'index']);

Route::prefix('admin')
    ->namespace('admin')
    // ->middleware(['admin'])
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])
            ->name('dashboard');
});


Route::get('/login', [LoginController::class, 'index']);
Route::post('authenticate', [LoginController::class, 'authenticate']);


Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);