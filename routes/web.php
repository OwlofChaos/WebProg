<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DonateController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Auth;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [DonateController::class, 'home'])->name('home');
    Route::get('/donate', [DonateController::class, 'index'])->name('donate.index');
    Route::get('/project', [ProjectController::class, 'project'])->name('project');
});

Route::get('/', function () {
    return Auth::check() ? redirect()->route('home') : redirect()->route('login.form');
});
