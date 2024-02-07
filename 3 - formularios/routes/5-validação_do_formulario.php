<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
    use Illuminate\Support\facades\Request as Input
    as Input é um alias.
    Foi necessário criar esse alias para não dar conflito com
    use Illuminate\Http\Request
*/


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

//Tema do arquivo: Validação do formulário

Route::get('/login', function(Request $request) {
    return view('validacao_formulario',['title'=>'login']);
});

Route::post('/login', function(Request $request) {
    /* $request->validate() -> recebe uma string '' ou um array
        'email' é o nome do campo no formulário. É o que está em name lá no formulário.

        required: nome requerido.
        min:3 -> mínimo 3 caraceteres

        Todo tipo de validação é separado por um |(pipe) ou usando array
        Por pipe:
         $validated = $request->validate([
        'email'=> 'required|email',
        'password' => 'required|min:3'
    ]);

    Por array:

     $validated = $request->validate([
        'email'=> ['required','email'],
        'password' => ['required','min:3']
    ]);

    */

    $validated = $request->validate([
        'email'=> ['required','email'],
        'password' => ['required','min:3']
    ]);

    //Vai exibir todos os campos
    dd($validated);

})->name('login.store');
