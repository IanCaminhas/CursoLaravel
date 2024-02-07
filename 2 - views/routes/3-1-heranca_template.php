<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesteController;
use App\Http\Controllers\SignUpController;


//Assunto do arquivo: Herança de template

Route::get('/signup', [TesteController::class, 'signUpHerancaTemplate']);

Route::get('/composer', [TesteController::class, 'indexComposer']);
