<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;

Route::get('/', [HomeController::class, 'index'])->name('home');

/*
    Assunto do arquivo:
    Middlewares nas rotas. Uso do seguinte array do arquivo Kernel.php: $routeMiddleware = [];
    Os middlewares das rotas ficam nesse array
*/

Route::get('/login', [LoginController::class,'index'])->name('login');

/*Apenas usuários logados podem ter acesso à seguinte rota.
Para isso, uso o middleware correspondente em ->middleware() para
ativar o middleware de autenticação.
Route::get('/protected', [HomeController::class, 'index'])->name('protected')->middleware('auth');

Abaixo, estou usando o middleware teste que criei

Tem como eu passar um parâmetro lá para o middleware. Vai ser uma string no seguinte formato: 'teste:ian'
teste é o middleware. ian é o valor para o middleware

*/
Route::get('/protected', [HomeController::class, 'index'])->name('protected')->middleware('teste:ian');

//middleware no agrupamento de rotas.
Route::prefix('admin')->middleware('auth')->group(function () {
    /*Pode ter alguma rota desse agrupamento que não vai mais precisar do ->middleware('auth').
    Como proceder ? ->withoutMiddleware('auth').
    Route::get('/', [AdminController::class, 'index'])->name('admin.home')->withoutMiddleware('auth');
    Em suma: acesse essa rota sem problema nenhum/sem o middleware auth. Não é mais obrigatório o usuário estar logado
    */
    Route::get('/', [AdminController::class, 'index'])->name('admin.home')->withoutMiddleware('auth');
    Route::get('/clients', [ClientController::class, 'index'])->name('admin.clients');
});


?>

