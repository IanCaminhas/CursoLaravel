<?php

use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Route;

//Objetivo do arquivo: Como criar o próprio cast

Route::get('/', function () {

    /*
    $arr = ['walk', 'eat', 'play', 'cry'];

    $users = User::create([
        'name'=> 'Debilóide',
        'email' => 'debiloide@example.com',
        'password' => bcrypt('123'),
        'tags' => $arr
    ]);
    */

    /*
    $arr = ['walk', 'eat', 'play', 'cry'];

    $user = User::latest()->first();

    dd($user->tags);

    $users = User::all();
    */

    //Limite agora é cadastrar no máximo 3 tags
    $arr = ['walk', 'eat', 'play'];
    $users = User::create([
        'name' => 'Tiozão',
        'email' => 'tiozao@email.com',
        'password' => bcrypt('123'),
        'tags' => $arr
    ]);

    return view('como_criar_o_proprio_cast')->with('users', $users);

});
