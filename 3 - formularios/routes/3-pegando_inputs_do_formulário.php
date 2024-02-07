<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\facades\Request as Input;

/*
    use Illuminate\Support\facades\Request as Input
    as Input é um alias.
    Foi necessário criar esse alias para não dar conflito com
    use Illuminate\Http\Request
*/


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Tema do arquivo: Pegando inputs do formulário

//pegando valores Parte 1
Route::post('/login', function(Request $request) {
    //dd('login');
    /*
        Pegando todos os campos: dd($request->all());
        Saída:
        array:3 [▼ // routes\web.php:29
            "_token" => "ebeVFj2hkGl4D2d8Yh7oNWckzIgmnCA9uS0mrOb4"
            "email" => "messi@example.com"
            "password" => "123" ]
        Dica: com $request->all(), posso pegar todos os campos de uma vez
    */

    /*  Vou pegar todos os campos, exceto o campo _token. Não quero o campo _token
        request->except('_token'). saída:
        array:2 [▼ // routes\web.php:43
            "email" => "messi@example.com"
            "password" => "123" ]
            Tá vendo ? nao busco o campo _token.

        Posso fazer com o uso de array. Com o array, faço  request->except() ignorar os campos que não quero.
        dd($request->except(['_token', 'email']));
    */

    /*  dd($request->only(['_token', 'email']));
        Somente os segiuintes campos: _token e email.
        saída:

        array:2 [▼ // routes\web.php:54
            "_token" => "ebeVFj2hkGl4D2d8Yh7oNWckzIgmnCA9uS0mrOb4"
            "email" => "messi@example.com" ]

        Posso usar apenas $request->only('email') para buscar apenas um dado.
          dd($request->only('email'));
        Saída:
        array:1 [▼ // routes\web.php:63
             "email" => "messi@example.com"
        ]
    */

    /*
    Pegando apenas um campo por vez: dd($request->input('email'));
    Saída: "messi@example.com"

    Posso pegar apenas um campo através do ->get().
    dd($request->get('password'));
    Saída: "123"

    Posso pegar dinamicamente, ou seja, pelo nome do campo. o name lá no formulário precisa estar email
    dd($request->email);
    Saída: "messi@example.com"
    */

    /*Posso verificar se existe o campo.
    Saída: "Tem email"
    if($request->has('email')) {
        dd('Tem email');
    }
    */

    /*Olhando a existência de um ou mais campos
        Tem algum desses campos ? posso usar apenas '' caso
        for apenas um campo. Posso usar array caso for mais de um campo.
        Saída: Existe

         if($request->hasAny(['password','dfgfd'])) {
            dd('Existe');
        }
    */

    /*
        Posso trabalhar com o Request facades tbm para buscar campos.
        dd(Input::all());
        Saída:
        array:3 [▼ // routes\web.php:94
             "_token" => "ebeVFj2hkGl4D2d8Yh7oNWckzIgmnCA9uS0mrOb4"
             "email" => "messi@example.com"
            "password" => "123" ]

         dd(Input::get('email'));
        Saída: "messi@example.com"
    */

    //Preferência pelo Request

    /*Para pegar arquivos file: all() também funciona
    dd($request->all()); */

    /*Pegando apenas o arquivo file
    dd($request->file()); */

    //Pegando file apenas pelo nome do campo
    dd($request->file);


})->name('login.store');

//pegando valores Parte 2
Route::get('/login', function(Request $request) {
    /*Pegando via query params. Url usada: http://localhost:8000/login?page=2
      dd($request->query());
    saída:
    array:1 [▼ // routes\web.php:25
        "page" => "2"
    ]
    */

    return view('pegando_inputs',['title'=>'login']);
});
