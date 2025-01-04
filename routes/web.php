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
Route::post('logout', [LoginController::class, 'destroy'])
    ->name('logout')->middleware('auth');

Route::resource('film', FilmController::class)->only(['index', 'show']);
Route::resource('film', FilmController::class)->except(['index', 'show'])
    ->middleware('auth');

Route::post('film/{filmId}/komentar', [FilmController::class, 'storeKomentar'])
    ->name('film.komentar.store')
    ->middleware('auth');

Route::get('/', function () {
    return redirect()->route('film.index');
});
