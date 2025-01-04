<?php

use App\Http\Controllers\FilmController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard.index');
});
Route::get('/login', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);

// Route::middleware('guest')->group(function () {
//     Route::get('register', [RegisterController::class, 'create'])
//         ->name('register');

//     Route::post('register', [RegisterController::class, 'store']);

//     Route::get('login', [LoginController::class, 'create'])
//         ->name('login');

//     Route::post('login', [LoginController::class, 'store']);
// });

// Route::middleware('auth')->group(function () {
//     Route::post('logout', [LoginController::class, 'destroy'])
//         ->name('logout');
// });

// Route::middleware('auth')->group(function () {
//     Route::resource('film', FilmController::class);
//     Route::get('/', function () {
//         return redirect()->route('film.index');
//     });
// });