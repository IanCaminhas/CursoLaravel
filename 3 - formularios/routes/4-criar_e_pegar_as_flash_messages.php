<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\facades\Request as Input;
use Illuminate\Support\facades\Session;

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

//Tema do arquivo: Criar e pegar as flash messages

//O curso começou por aqui para a criação de flash message
Route::get('/login', function(Request $request) {

    /*
    flash messages são mensagens que aparecem nas views
    flash messages são criadas através de sessions
    $request->session()->flash('flashMessage', 'Minha flash message');

    Posso também trabalhar com flash messages através das facades:
    Session::flash('flashMessage', 'Minha flash message');
    */


    return view('flash_messages',['title'=>'login']);
});

Route::post('/login', function(Request $request) {

    if(true) {
        $request->session()->flash('logged', 'Logado com sucesso');
        return redirect()->back()->with('logged', 'Logado com sucesso com a mensagem criada no redirect');
    }

})->name('login.store');
