<?php

use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Route;

//Objetivo do arquivo: Relação do Model com o Eloquent

Route::get('/', function () {

    /*
    Olha só: vai retornar um Illuminate\Database\Eloquent\Builder
    dd(User::where('id', '>', 10));
    */

    /*Olha só: retorna um Illuminate\Database\Eloquent\Collection
    Assim, posso usar o pluck(), por exemplo.
    dd(User::where('id', '>', 10)->get());
    */

    /*
    dd(User::all());
    Só para comparação:
        Trbalhar com User::all() é o mesmo que DB::table('users')->get().
        Esse method all() pertence ao User, ou seja, é exclusivo do eloquent.

        Esse method retorna uma collection. Por tanto, posso trabalhar com
        os metodos próprios da classe collection(tipo o take(), pluck()).
        Illuminate\Database\Eloquent\Collection
    */

    /*Retorna também: Illuminate\Support\Collection
    dd(User::pluck('name')); */

    /* Pega apenas o primeiro:
    dd(User::first());
     */

    /* Model com o where
    dd(User::where('id','>',3));
    */

    /*Criando methods no model para
    dd(User::whereIdGreaterThan(3)->get()); */

    /*Posso encadear da seguinte maneira:
    dd(User::whereIdGreaterThan(3)->where('name', 'Tatiana Leon')->get()); */

    /*Não posso encadear o where e o method criado na classe model. Claro,
    seguindo a seguinte ordem:
    dd(User::where('name', 1)->whereIdGreaterThan(3)->get());
    Para realizar esse encadeamento, preciso usar os scopes:
    basta colocar a palavra scope no method.
    whereIdGreaterThan2 chama scopeWhereIdGreaterThan2(Lá na model User)... Isso não dá eero.
    Essa é a forma para realizar o encadeamento da seguinte ordem: where e method do model
    dd(User::where('name', 1)->whereIdGreaterThan2(3)->get());
    */

    $users = User::where('name', "Tatiana Leon")->whereIdGreaterThan2(3)->get();
    return view('relacao_model_com_eloquent')->with('users', $users);

});
