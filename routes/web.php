<?php

use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicioSesion');
});

Route::get('/Usuario/NuevoUsuario', [UsuariosController::class, 'CrearUsuario'])->name('usuario.CrearUsuario');
Route::post('/Usuario/GuardarUsuario', [UsuariosController::class, 'GuardarUsuario'])->name('usuario.GuardarUsuario');




