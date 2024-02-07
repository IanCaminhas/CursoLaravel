<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\LoginController;

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

//Tema do arquivo: Classe para validação

Route::get('/login', function(Request $request) {
    return view('classe_para_validacao',['title'=>'login']);
});

//Validação sem o controller
Route::post('/login', function(LoginRequest $request) {
    $validated = $request->validated();
    dd($validated);

})->name('login.store');

//Validação com uso do controller
Route::get('/login2', [LoginController::class, 'index']);
Route::post('/login2', [LoginController::class, 'store'])->name('login.store2');

