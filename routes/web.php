<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login', [UserController::class, 'auth'])->name('auth');

Route::get('register', [UserController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [UserController::class, 'register'])->name('register.submit');

Route::get('/home', function () {
    return view('home');
})->name('home')->middleware('auth');



