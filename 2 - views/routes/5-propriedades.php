<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesteController;

//Assunto do arquivo: Views - Blade Components#02 - Propriedades
Route::get('/propriedades', [TesteController::class, 'indexPropriedades']);
