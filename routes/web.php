<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DonateController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;

// Authentication Routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Protected Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/home', [DonateController::class, 'home'])->name('home');
    Route::get('/donate', [DonateController::class, 'index'])->name('donate.index');
    Route::post('/donate', [DonateController::class, 'submit'])->name('donate.submit');
    Route::get('/aboutus', [DonateController::class, 'aboutus'])->name('aboutus');
    Route::get('/impact', [DonateController::class, 'impact'])->name('impact');
    Route::get('/project', [ProjectController::class, 'project'])->name('project');
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show')->middleware('auth');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update')->middleware('auth');
});

// Default Redirect
Route::get('/', function () {
    return Auth::check() ? redirect()->route('home') : redirect()->route('login.form');
});





