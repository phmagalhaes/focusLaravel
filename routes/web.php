<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\TaskController;

Route::get('/', [UsuariosController::class, 'index']);

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/home', [TaskController::class, 'index'])->name('home')->middleware('auth');
Route::get('/tasks/{id}', [TaskController::class, 'show'])->middleware('auth');

Route::get('/tasks/create', [TaskController::class, 'create']);