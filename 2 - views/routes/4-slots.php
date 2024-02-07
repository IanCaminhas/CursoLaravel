<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesteController;

//Assunto do arquivo: Views - Blade Components#01 - Slots
Route::get('/slots', [TesteController::class, 'indexSlots']);
