<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonateController;

Route::get('/donate', [DonateController::class, 'index'])->name('donate.index');
Route::post('/donate', [DonateController::class, 'submit'])->name('donate.submit');

Route::get('/aboutus', [DonateController::class, 'aboutus'])->name('aboutus');
Route::get('/impact', [DonateController::class, 'impact'])->name('impact');
Route::get('/home', [DonateController::class, 'home'])->name('home');
Route::get('/login', [DonateController::class, 'login'])->name('login');
Route::get('/register', [DonateController::class, 'register'])->name('register');
Route::get('/project', [DonateController::class, 'project'])->name('project');