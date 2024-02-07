<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TesteController;


//Assunto do arquivo: diretivas


Route::get('/diretivas', [TesteController::class, 'indexDiretivas']);
