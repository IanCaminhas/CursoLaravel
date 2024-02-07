<?php

//use App\Models\User;
use Illuminate\Support\Facades\Route;
use Http\Controllers\HomeController;

//Assunto do arquivo: Nomeando as rotas

/*Nomeando rotas
    Ao invés de redirecionar pela URI,
    faço um redirect para a rota nomeada.
    Alterando a URI da rota, não precirei
    alterar os redirects que usam essa URI.
    Em suma: o redirect()->route() está vinculado
    ao nome da rota e não na sua URI.

    Usando a URI, posso fazer:
    return redirect('teste2');
    Se eu mudar a URI para
    Route::get('/teste', function(){);
    Vai retornar uma página 404

*/


Route::get('/', function(){
    return view('welcome');
})->name('home');


Route::get('/contact', function(){

    /*return redirect('teste2'); fazendo assim, fico refém da URI /teste2.
    Se eu mudar para teste5, aí teria que mudar esses redirect('teste2');

    A solução é a rota nomeada com uso do redirect()->route('teste');
    */
    return redirect()->route('teste');
})->name('contact');


Route::get('/teste2', function(){
    dd('teste');
})->name('teste');

/*Rota nomeada para group.
Se eu fizer redirect()->route('admin.create')
*/
Route::name('admin.')->prefix('admin2')->group(function() {
    Route::get('/', function() {
    });

    Route::get('/create', function () {
    })->name('create');

    Route::get('/update', function () {
    })->name('update');
});









