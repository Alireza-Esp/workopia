<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('jobs', JobController::class)->middleware('auth')->only('create', 'store', 'edit', 'update', 'destroy');
Route::resource('jobs', JobController::class)->except('create', 'store', 'edit', 'update', 'destroy');

Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterController::class, 'register'])->name('register');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/login', [LoginController::class, 'auth'])->name('login.auth');
});

Route::post('logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');