<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonateController;

Route::get('/donate', [DonateController::class, 'index'])->name('donate.index');
Route::post('/donate', [DonateController::class, 'submit'])->name('donate.submit');

// Route::get('/', function () {
//     return view('welcome');
// });
