<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProtectedController;

Route::get('/', [HomeController::class, 'index'])->name('home');

/*
    Assunto do arquivo:
    Middlewares nos controllers.
*/

Route::get('/login', [LoginController::class,'index'])->name('login');
Route::get('/protected/create', [ProtectedController::class, 'create'])->name('protected.create');


Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.home')->withoutMiddleware('auth');
    Route::get('/clients', [ClientController::class, 'index'])->name('admin.clients');
});


?>

