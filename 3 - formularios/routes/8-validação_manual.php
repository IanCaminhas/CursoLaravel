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

//Tema do arquivo: Validação manual


Route::get('/login', [LoginController::class, 'indexValidacaoManual']);
Route::post('/login', [LoginController::class, 'store2'])->name('login.store2');

