<?php

use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Route;

//Objetivo do arquivo: Como funciona a propriedade cast

Route::get('/', function () {
    /*Fazendo cast com php puro
    $is_admin = 1;
    Estou transformando para um tipo booleano. A saída vai ser true.
    dd((bool) $is_admin);

    Está alterando. Olhe a saída: "boolean"
    dd(gettype((bool) $is_admin));

    Também é exemplo cast. conversão da String para date
    $created_at = '2024-02-15 16:18:00';
    dd(date('d/m/Y H:i:s', strtotime($created_at)));

    Transformando o array em objeto. Também é exemplo de cast
    $arr = ['name' => 'Ian', 'age' => 29];
    $arrObject = (object)$arr;
    Saída: "Ian"
    dd($arrObject->name);

    convertendo numa string:
         dd((string)$is_admin);
         saída: "1"
    */


    /*
    O cast do laravel fica no model User.
    Para fazer o cast, basta fazer no model User:
      protected $casts = [
        'email_verified_at' => 'datetime',
        'is_admin' => 'string',
	    'created_at' => 'date:d/m/Y H:i:s',
        'tags' => 'collection'
    ];

    Posso fazer cast para leitura
    $users = User::all();
    dd($users->toArray());


    Posso fazer cast para escrita também
    $arr = ['walk', 'eat', 'play'];
    $arr não é aceito como array como 'tags'. Para aceitar o array,
    precisei incluir lá no array casts do Model User: 'tags' => 'array'

    User::create([
        'name' => 'oi',
        'email' => 'oi@example.com',
        'password' => bcrypt('123'),
        'tags' => $arr
    ]);

    dd(User::all()->toArray());

    Se eu quiser colocar o mesmo valor para todos os regristros
    $arr = ['walk', 'eat', 'play'];
    User::where('id', '>', 0)->update([
        'tags' => $arr
    ]);
    dd(User::all());
    */

    return view('como_funciona_a_propriedade_cast')->with('users', User::all());

});
