<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::get('/register', [AuthController::class, 'register_view'])->name('register');
Route::POST('/logindata', [AuthController::class, 'login']);
Route::POST('/registerdata', [AuthController::class, 'register']);

Route::get('/redirects', [HomeController::class, 'redirects']);

Route::get('/users', [AdminController::class, 'users']);
Route::get('/deleteuser/{id}', [AdminController::class, 'deleteUser']);
Route::get('/edituser/{id}', [AdminController::class, 'editUser']);

Route::get('/en', [HomeController::class, 'localeEn']);
Route::get('/ps', [HomeController::class, 'localePs']);
Route::get('/dr', [HomeController::class, 'localeDr']);