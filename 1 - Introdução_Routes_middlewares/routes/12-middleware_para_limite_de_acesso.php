<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProtectedController;

Route::get('/', [HomeController::class, 'index'])->name('home');

/*
    Assunto do arquivo:
    Middleware para limite de acesso.
*/

/*Se eu passar de 3 carregamentos por minuto, o middleware throttle vai blquear o acesso.
    :users é a chave para eu acessar o Middleware
*/
Route::middleware('throttle:users')->get('/teste', [LoginController::class, 'index'])->name('login');

?>

