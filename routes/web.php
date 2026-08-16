<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

Route::get('/', [HomeController::class, 'index']);
Route::resource('jobs', JobController::class);

Route::get('/register', [RegisterController::class, 'register']);
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/login', [LoginController::class, 'login']);
Route::post('/login', [LoginController::class, 'auth']);