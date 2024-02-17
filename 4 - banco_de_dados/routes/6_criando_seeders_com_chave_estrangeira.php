<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

//Objetivo do arquivo: criando seeders com chave estrangeira

Route::get('/', function () {
    $users = User::all()->random()->id; //para pegar apenas um elemento de forma randômica
    $users = User::all()->pluck('id');
    dd($users);
    return view('welcome');
});
