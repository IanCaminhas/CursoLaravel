<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Tema do arquivo: Enviando requisições PUT e DELETE no formulário

//Forma de gerar token número 1
Route::get('/user/edit/{id}', function(Request $requet){
    /*tokens são gerados pelo $requet->session()
    exemplo de token gerado: "GrVstP0J5O1a8MbkqtfNUG12fbVXF3UPkbLKcxtO"
    Gerei esse exemplo com dd($token);
    */
    $token = $requet->session()->token();
    return view('csrf')->with('token', $token);
});

//Forma de gerar token número 2
Route::get('/user1/edit/{id}', function(Request $requet){
    /*csrf_token é igual a $requet->session()->token();
    csrf_token acaba sendo um helper para fazer: $requet->session()->token();
    helper é uma funão global para fazer algo. E, nesse caso, é um helper gerar token
    */
    $token = csrf_token();
    return view('csrf')->with('token', $token);
});

Route::DELETE('/user/edit/{id}', function(){
    dd('Delete');
})->name('user.delete');
