<?php

use App\Http\Controllers\FilmController;
use App\Http\Controllers\KomentarController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'store'])->middleware('guest');

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('/logout', [LoginController::class, 'destroy'])->name('logout')->middleware('auth');

Route::resource('film', FilmController::class)->except(['index', 'show'])
    ->middleware('auth');
Route::resource('film', FilmController::class)->only(['index', 'show']);

Route::post('/komentar/{filmId}', [KomentarController::class, 'store'])
    ->name('komentar.store')
    ->middleware('auth');

Route::get('/', [FilmController::class, 'guest'])->name('home');

// Route::get('/p', function () {
//     return view('dashboard.komentar.index');
// });