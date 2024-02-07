<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

/*  Quando invoco o method resource, significa que ele vai atender as rotas abaixo usando apenas um method:

    Route::get('/user', [UserController::class,'index']);
    Route::post('/user/create', [UserController::class,'create']);
    Route::get('/user/{id}', [UserController::class,'show']);
    Route::get('/user/{id}/edit', [UserController::class,'edit']);
    Route::put('/user/{id}', [UserController::class,'update']);
    Route::post('/user', [UserController::class,'store']);
    Route::delete('/user/{id}', [UserController::class,'destroy']);

    Isso fica muito repetitivo. Ficar fazendo uma rota individual para cada method. Manual d+

    Se eu der um php artisan route:list
    GET|HEAD        user ................................................................... user.index › UserController@index
    POST            user ................................................................... user.store › UserController@store
    GET|HEAD        user/create .......................................................... user.create › UserController@create
    GET|HEAD        user/{user} .............................................................. user.show › UserController@show
    PUT|PATCH       user/{user} .......................................................... user.update › UserController@update
    DELETE          user/{user} ........................................................ user.destroy › UserController@destroy
    GET|HEAD        user/{user}/edit ......................................................... user.edit › UserController@edit

    vai aparecer todos as rotas...
    Mas, seu eu quiser trabalhar com apenas um method ou com apenas 2, 3 methods ? usando o method only(['index','store','create'])
        Fazendo uma php artisan route:list, vão aparecer apenas os 3 methods
*/

Route::resource('user', UserController::class)->names([
    'create' => 'create.user', //dando um nome para a uri /create
    'store' => 'store.user',
])->only(['index','store','create']);

//Fazendo o redirecionamento para outra rota nomeada do method resource()
Route::get('/teste', function() {
    return redirect()->route('create.user');
});


?>

