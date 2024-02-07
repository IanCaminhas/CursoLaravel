<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TesteController;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', [HomeController::class, 'index'])->name('home');

/*Chamando a view no controller
Route::get('teste', function(){
   //return view('home');
   //ainda posso fazer:
   //return View::make('home');
});
*/

//Rota para teste composer
Route::get('/composer', [TesteController::class, 'indexComposer']);
