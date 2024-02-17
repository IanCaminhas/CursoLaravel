<?php

use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Route;

//Objetivo do arquivo: Fazendo requisições com o raw sql

Route::get('/', function () {
    //$users = DB::select("select * from users"); pego todos os users
    //$users = DB::select("select * from users where id > 30"); pego todos os users com di maior que 1

    /*Trabalhando com o binding. o que é o binding ?
     Como a facade DB trabalha com PDO por debaixo dos panos, me refiro ao binding value.
     binding value é o :id, por exemplo. isso é um placeholder.
     Esse binding é um array.
     Forma 1 de realizar binding:
     $users = DB::select("select * from users where id > :id", ['id'=>70]);

     Forma 2 de realizar binding: através da interrogação
     $users = DB::select("select * from users where id > ? order by id desc", [70]);
    */

    /* Trabalhando com insert:
        $insert = DB::select("insert into users (name, email, email_verified_at, password, remember_token)
                            values (?, ?, ?, ?, ?)", ['oi', 'oi@email.com.br',now(), bcrypt('1,2,3'), Str::random(10)]);
    */

    /*Trabalhando com update:
    $updated = DB::update('update users set email = :email where id = :id', ['email'=> 'teste@email.com', 'id' => 1]);
    Um retorno vai ser exbido
    */

    $deleted = DB::delete('delete from users where id = ?', [103]);

    dd($deleted);
});
