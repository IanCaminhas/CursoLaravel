<?php

use Illuminate\Support\Facades\Route;
use Http\Controllers\HomeController;

//Assunto do arquivo: Como criar uma rota

//Posso acessar via insomnia também
Route::get('/', function() {
    dd('home');
});

//Posso acessar via insomnia também
Route::get('/contato', function() {
    dd('contato');
});

//Posso acessar via insomnia também
Route::post('/create/user', function() {
    dd('create');
});

//Posso acessar via insomnia também
Route::put('/update/user', function () {
    dd('update');
});

//Posso acessar via insomnia também
Route::delete('/delete/user', function () {
    dd('delete');
});

Route::get('/', function () {
    //$users = User::all();
    //return $users;
    //dd($users);
    return view('welcome');
});

//Trabalhando com uma callable
$home = function() {
   dd('home');
};

Route::get('/', $home);


//Trabalhando com string no segundo parâmetro: '@index'
Route::get('/', HomeController::class.'@index');


//Trabalhando com array no segundo parâmetro: primeira posição é a classe controller e a segunda posição é o método
Route::get('/', [HomeController::class, 'index']);

//Uma rota que aceita tanto uma requisição do tipo get quanto uma requisião do tipo post
Route::match(['get', 'post'], '/user/teste', function (){
    dd('teste');
});

