<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;


/*
    Chamando o método do controller: '@index'
    O que é o HomeController::class ? é o caminho até o HomeController.

    dd(HomeController::class); vai me dar o caminho completo:
    Saída do navegador: "App\Http\Controllers\HomeController"
    Posso fazer isso ainda que vai dar certo:
        Route::get('/', 'App\Http\Controllers\HomeController@index');

    Conclusão:
    Observe o trecho: HomeController::class.'@index'
    o ponto que separa HomeController::class de '@index' serve para concatenar
*/

/*Posso trabalha no seguinte formato para trabalhar com controllers:
    Route::get('/', HomeController::class.'@index');
*/

//Posso trabalhar com o seguinte formato também, ou seja, no formato de array:
Route::get('/', [HomeController::class, 'index']);
Route::get('/user', [UserController::class,'index']);
Route::post('/user/create', [UserController::class,'create']);
Route::get('/user/{id}', [UserController::class,'show']);
Route::get('/user/{id}/edit', [UserController::class,'edit']);
Route::put('/user/{id}', [UserController::class,'update']);
Route::post('/user', [UserController::class,'store']);
Route::delete('/user/{id}', [UserController::class,'destroy']);


/*  Quando invoco o method resource significa que ele vai as rotas abaixo usando apenas um method:
    Route::get('/user', [UserController::class,'index']);
    Route::post('/user/create', [UserController::class,'create']);
    Route::get('/user/{id}', [UserController::class,'show']);
    Route::get('/user/{id}/edit', [UserController::class,'edit']);
    Route::put('/user/{id}', [UserController::class,'update']);
    Route::post('/user', [UserController::class,'store']);
    Route::delete('/user/{id}', [UserController::class,'destroy']);
*/


?>

