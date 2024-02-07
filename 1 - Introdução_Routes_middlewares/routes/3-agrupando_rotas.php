<?php

//use App\Models\User;
use Illuminate\Support\Facades\Route;
use Http\Controllers\HomeController;

//Assunto do arquivo: Agrupando rotas

/*
    Introdução: são duas maneiras de criar grupo de rotas(seções diferentes):
    1 - Route::group(['prefix' => 'blog'],function() {});
    2 - Route::prefix('forum')->group( function() {});

    Para usar o group, preciso colocar o prefixo num array.
    http://localhost:8000/blog/ -> /blog é o prefixo e a
    outra barra em seguida significa a página inicial.

    http://localhost:8000/blog/post/dksdflsk
    /blog é o prefixo.
    /post/dksdflsk é a rota dentro do agrupamento.
*/

Route::group(['prefix' => 'blog'],function() {
    Route::get('/', function() {
        dd('blog');
    });

    Route::get('/post/{slug}', function($slug) {
        dd($slug);
    });
});


Route::group(['prefix' => 'admin'],function() {
    Route::get('/', function() {
        dd('admin');
    });
});


//Também tem essa maneira de criar um grupo de rotas
Route::prefix('forum')->group( function() {
    Route::get('/', function() {
        dd('Cruzeiro FC');
    });

    Route::get('/cruzeiro/{slug}', function($slug) {
        dd($slug);
    });
});







