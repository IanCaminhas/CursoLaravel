<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\HomeController;
use App\http\controllers\ProductController;

/*
Route::get('/', function() {
    dd('home');
})->name('home');
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

/*
Route::get('/product/{id}', function($id) {
    dd($id);
})->name('product');
*/

Route::get('/product/{id}', [ProductController::class, 'edit'])->name('product.edit');
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');


Route::get('/teste', function() {
    //sempre que for fazer um redirect, coloque um return antes
    //return redirect('/product/45'); redirecionando para uma rota com valor dinâmico
    //redirecinando para uma rota nomeada:  return redirect()->route('home');
    //Passando um valor dinâmico: return redirect()->route('product', ['id' => 45]);

    /*Redirect com controller
    return redirect()->action([HomeController::class, 'index']);
    return redirect()->action([ProductController::class, 'edit'], ['id' => 45]); */
    return redirect()->action([ProductController::class, 'create']);
});

//Redirecionando para um link externo
Route::get('/externo', function(){
    return redirect()->away('http://google.com');
});


?>

