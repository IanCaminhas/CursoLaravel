<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignUpController;

//Assunto do arquivo: Herança de template

Route::get('/', [HomeController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);
Route::get('/signup', [SignUpController::class, 'index']);
Route::post('/login', [LoginController::class, 'store'])->name('login.post');
