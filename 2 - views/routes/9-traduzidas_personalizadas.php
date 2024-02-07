<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesteController;
use Illuminate\Http\Request;

//Views - Mensagens traduzidas e personalizadass

Route::get('/login1', function(){
    return view('traduzidas_personalizadas_parte_1');
});

Route::get('/login2', function(){
    return view('traduzidas_personalizadas_parte_2');
});


Route::post('/login', function(Request $request){

    $validated = $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);

    dd($validated);
})->name('login.store');



?>
