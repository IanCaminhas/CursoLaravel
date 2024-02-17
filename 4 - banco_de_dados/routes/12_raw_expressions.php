<?php

use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Route;

//Objetivo do arquivo: Raw Expressions

Route::get('/', function () {

    /* Se eu fizer o código abaixo sem o DB::raw(),
    aspas vão ser inseridas na query sql e um erro será exibido no navegador.
    usando DB::raw(), o sql puro será elaborado sem as aspas.

    ->where('id','>',10) id ser maior que 10
    $users = DB::table('users')
        ->select(DB::raw('count(*) as user_count, name'))
        ->where('id','>',10)
        ->groupBy('name')
        ->get();
    */

    /* A query builder abaixo também vai resultar erro se
    eu não colocar o DB::raw().
     aspas vão ser inseridas na query sql e um erro será exibido no navegador.
    usando DB::raw(), o sql puro será elaborado sem as aspas.

     $users = DB::table('users')
        ->select('id', 'name', 'email','created_at')
        ->where(DB::raw("(DATE_FORMAT(created_at, '%d-%m-%y'))"), "02-12-2024")
        ->get();
    */

    /*"?" vai ser substituída pelo binding: ['02-12-2024']. Assim poderei receber essa data de um formulário
    $users = DB::table('users')
        ->select('id', 'name', 'email','created_at')
        ->where(DB::raw("(DATE_FORMAT(created_at, '%d-%m-%y'))"), "?")
        ->setBindings(['02-12-2024'])
        ->get();
    */

    /*Não preciso trabalhar com DB::raw()... Por consequência, não vou precisar trabalhar com ->setBindings().
    O valor vai ser passado como segundo parâmetro.
    O Laravel dispõe de whereRaw, selectRaw, etc... Basta consultar a documentação.
    https://laravel.com/docs/10.x/queries#raw-expressions

    $users = DB::table('users')
        ->select('id', 'name', 'email','created_at')
        ->whereRaw("(DATE_FORMAT(created_at, '%d-%m-%y')) = ?", ['12-02-2024'])
        ->get();

    */

    /*
        ? vai ser substituído por ['12-02-2024']
        Além disso, são necessários o ? e o ['12-02-2024']
    */
    $users = DB::table('users')
    ->select('id', 'name', 'email','created_at')
    ->whereRaw("(DATE_FORMAT(created_at, '%d-%m-%y')) = ?", ['12-02-2024'])
    ->get();

    dd($users);

    /*
        Fazendo dd($users), será retornado: Illuminate\Support\Collection
    */

    return view('users')->with('users', $users);

});
