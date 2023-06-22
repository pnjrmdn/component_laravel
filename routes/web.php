<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;



Route::get('/', function () {
    return view('home', ['title' => 'Home']);
})->name('home');

Route::get('register', [UsersController::class, 'register'])->name('register');
Route::post('register', [UsersController::class, 'register_action'])->name('register.action');
Route::get('login', [UsersController::class, 'login'])->name('login');
Route::post('login', [UsersController::class, 'login_action'])->name('login.action');
Route::get('password', [UsersController::class, 'password'])->name('password');
Route::post('password', [UsersController::class, 'password_action'])->name('password.action');
Route::get('logout', [UsersController::class, 'logout'])->name('logout');
