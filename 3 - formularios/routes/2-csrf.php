<?php

use Illuminate\Support\Facades\Route;

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

//Tema do arquivo: CSRF

Route::get('/user/edit/{id}', function(){
    return view('put_delete');
});

Route::put('/user/edit/{id}', function(){
    dd('Update');
})->name('user.update');

Route::DELETE('/user/edit/{id}', function(){
    dd('Delete');
})->name('user.delete');
