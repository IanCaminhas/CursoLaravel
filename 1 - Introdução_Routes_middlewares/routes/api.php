<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


/*
    Rota para pegar os usuários do sistema.
    Vou limitar a quantidade de acessos a essa rota.
    Para isso, vou usar o seguinte middleware: 'throttle:api'
    api é um parâmetro para o middleware throttle

    Esse middleware está no arquivo Kernel.php, no array protected $middlewareGroups = [];

    Além disso, configurei o method protected function configureRateLimiting(){}
    no arquivo RouteServiceProvider.php ... Olhe lá esse method

    Se ultrapassar 3 requisições por minuto, o statusCode 429 é gerado. Saída: 429 | TOO MANY REQUESTS.
    Se eu fizer um outra requisição após ter chegado no limite, não serei permitido realizar outra
    requisição. Para permitir a realização de mais reqisições a essa rota, preciso fazer um
    php artisan cache:clear

*/
Route::middleware('throttle:users')->get('users', [UserController::class,'listUsersAPI']);
