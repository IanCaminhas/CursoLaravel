<?php

use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Route;

//Objetivo do arquivo: Query Builder#02

Route::get('/', function () {
    /*Se eu não colocar nada no delete(), ele vai apagar todos os registros
     $deleted = DB::table('users')->delete();
     //vai retornar o último deletado
     dd($deleted);
    */

    /*
    Deletando pelo id
    $deleted = DB::table('users')->delete(110); ->delete(101) recebe o id
    dd($deleted); retorna o valor número 1. Significa que foi true. Se fosse 0, significa que foi false
    */

    /*Deletando pela coluna de email
    $deleted = DB::table('users')->where('email','rios.reinaldo@dias.org')->delete();
    dd($deleted); */

    /*Se eu não colocar o where, todos os registros da coluna serão atualizados
    $updated = DB::table('users')->update([
        'email' => 'y@y.com'
    ]);
    */
    $updated = DB::table('users')->where('id', 203)->update([
        'email' => 'y@y.com'
    ]);

    dd($updated);

    return view('welcome');
});
