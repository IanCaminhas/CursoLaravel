<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserStoreController;
use App\Http\Controllers\ProductStoreController;
use App\Http\Controllers\ProductController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/user/create', [UserController::class, 'create']);
//O method __invoke() {} vai ser invocado
Route::post('/user', UserStoreController::class);

/*
    Tenho uma classe controller que tem o method store.
    Nao quero usar ele, pois vou invocá-lo na classe ProductStoreController.
    Uso o ->except() para ignorar esse method
*/
/*->except('store') = Vou trabalhar com todos os resources, exceto o store.
Vou trabalhar com esse method na classe ProductStoreController
*/
Route::resource('/product', ProductController::class)->except('store');

Route::post('/product', ProductStoreController::class);

?>

