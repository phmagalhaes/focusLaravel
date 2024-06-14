<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsuariosController;

Route::get('/', [UsuariosController::class, 'index']);

Route::get('/login', function () {
    return view('login');
});

Route::get('/cadastro', function () {
    return view('cadastro');
});