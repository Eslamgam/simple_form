<?php

use App\Models\Customer;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/register', [CustomerController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [CustomerController::class, 'register'])->name('register');