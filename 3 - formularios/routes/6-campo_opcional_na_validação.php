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

//Tema do arquivo: Campo opcional na validação

Route::get('/login', function(Request $request) {
    return view('campo_opcional',['title'=>'login']);
});

Route::post('/login', function(Request $request) {

    /* Cenário: se na validação do email eu não colocar o required,
        e se eu não colocar o valor de email... Quer dizer que vai ser aceito ?
        Não. Vai ser exibida a mensagem de validação referente a 'email'.

        Para aceitar valor em branco, basta colocar 'nullable'.
        Fazendo isso, campo email em branco vai ser aceito.

        Em suma: para colocar o campo opcional na validação, basta fazer: 'nullable'

    */

    $validated = $request->validate([
        'email'=> ['nullable','email'],
        'password' => ['required','min:3']
    ]);

    //Vai exibir todos os campos
    dd($validated);

})->name('login.store');
