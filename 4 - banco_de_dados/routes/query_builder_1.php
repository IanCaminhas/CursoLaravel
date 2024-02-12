<?php

use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Route;

//Objetivo do arquivo: Query Builder#01

Route::get('/', function () {

    /*  $users = DB::table('users')->select('id','name');
        Se eu não colocar nada em select(), vai retornar tudo.
        select('id','name') vai pegar os id's e os name's de todos os usuários.
        se eu não colocar o método get, va retornar:

        Illuminate\Database\Query\Builder {#281 ▼ // routes\web.php:18
        +connection: Illuminate\Database\MySqlConnection {#274 …24}
        +grammar: Illuminate\Database\Query\Grammars\MySqlGrammar {#277 …4}
        +processor: Illuminate\Database\Query\Processors\MySqlProcessor {#278}
        ...
          +useWritePdo: false
        }

        $users = DB::table('users')->select('id','name')->get();

        Com o método ->get() vai retornar todos os users.
        Esses users vão ser retornados numa Collection.
        Se retorna uma Collection, posso usar os métodos do próprio Collection.
        Exemplos: pluck(), o take(), etc.
        dd($users->take(10));
        dd($users->pluck('name'));
        dd($users->take(10)->pluck('name'));

        Não preciso chamar o get() para fazer um take() ou pluck().
        Posso já fazer o encadeamento:
        $users = DB::table('users')->select('id','name')->take(10)->pluck('name');

        $users = DB::table('users')->select('id','name')->where('id', '>', 50)->orderby('id', 'desc')->limit(10)->get();
        diferenças entre take() e limit()
        take() faz a lógica no código, enquanto que limit() faz a lógica no sql.
    */

    $users = DB::table('users')->select('id','name')->where('id', '>', 50)->orderby('id', 'desc')->limit(10)->get();


    dd($users);
    return view('welcome');
});
