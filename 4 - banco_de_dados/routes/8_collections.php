<?php

use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Route;

//Objetivo do arquivo: Collections

Route::get('/', function () {

    /*  $collect = collect([1,2,3,4,5]);
        collect() é um helper.
        helper é uma função.
        O helper collect() é uma maneira simplificada de chamar:
        $collect = new Collection(1,2,3,4,5);
    */

    /*
         $collect = new Collection([1,2,3,4,5]);
        dd($collect);
    */

    /*pluck também é uma collection
    vai retornar os valores da chave associativa

    $collect = collect([
        ['product_id' => 'prod-100', 'name' => 'Desk'],
        ['product_id' =>'prod-200', 'name' => 'Chair']
    ]);

    /*
    Saída:
        0 => "prod-100"
        1 => "prod-200"
    dd($collect->pluck('product_id'));
    Olha só! retornou todos os valores da chave associativa
    */

    /*
    Esse data retorna um array comum e não uma collection
    $data = DB::select('select * from users');
    Agora sim o $data retornado vai ser convertido numa collection
    $collection = collect($data);
    Vou pegar 10 users
    $users = $collection->take(10);
    Vou ter 10 users retornados
    dd($users);
    */

    $data = DB::select('select * from users');
    $collection = collect($data);

    //Estou retornando apenas os users com id maior que 50. O retorno é uma instância do collection
    $users = $collection->filter(function($value, $key){
        return $key > 50;
    });

    //Como estou retornando uma instância do collection, posso usar a função take()
    dd($users->take(10));

    /*Se eu quiser tranformar uma instância do collection para um array, basta usar:
        dd($users->take(10)->toArray());
    */

    return view('welcome');
});
