<?php

use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Route;

//Objetivo do arquivo: Query Builder#02

Route::get('/', function () {

    /*Sem paginação:
        $users = DB::table('users')->select('id', 'name', 'email')->get();
    */

    //Com paginação: ->paginate(10) 10 users por página
    //dd($users);
    $usersPaginateNumerate = DB::table('users')->select('id', 'name', 'email')->paginate(10);


    //Sem a paginação por números. Vai ter dois links: previous e paginate
    $usersPatginateNextPrevious = DB::table('users')->select('id', 'name', 'email')->simplePaginate(10);

    return view('paginacao')->with('usersPaginateNumerate', $usersPaginateNumerate)
                            ->with('usersPatginateNextPrevious', $usersPatginateNextPrevious);

});
