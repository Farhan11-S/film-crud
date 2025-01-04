<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('register', [RegisterController::class, 'create'])
        ->name('register');

    Route::post('register', [RegisterController::class, 'store']);

    Route::get('login', [LoginController::class, 'create'])
        ->name('login');

    Route::post('login', [LoginController::class, 'store']);
});

Route::middleware('auth')->group(function () {
    Route::post('logout', [LoginController::class, 'destroy'])
        ->name('logout');
});

Route::middleware('auth')->group(function () {
    Route::resource('film', FilmController::class);
    Route::get('/', function () {
        return redirect()->route('film.index');
    });
});
