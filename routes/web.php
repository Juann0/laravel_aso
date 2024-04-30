<?php

use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistroController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['acceso-rango'])->group(function () {
    Route::get('/login', [LoginController::class, 'index']);
    Route::post('/login', [LoginController::class, 'login'])->name('login');
});


Route::get('/registro', [RegistroController::class, 'index']);
Route::post('/registro', [RegistroController::class, 'registroDeUsuarios'])->name('registro');

Route::get('/logout', [LogoutController::class, 'logout']);

Route::middleware(['acceso-admin'])->group(function () {
    Route::get('/home', [HomeController::class, 'index']);
});

Route::middleware(['acceso-regular'])->group(function () {
    Route::get('/homeregular', [HomeController::class, 'index']);
});
