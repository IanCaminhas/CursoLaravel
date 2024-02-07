<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProtectedController extends Controller
{
    public function __construct() {

        //Posso invocar o middleware usando string(quando é apenas um middleware) ou array(Quando são vários middlewares).

        /*Esse middleware vai funcionar para todos os métodos da classe corrente, exceto para os métodos index e create.
        Se fosse apenas um method, uso string. Quando são mais de um method, uso array. Exemplo: ->except('index')
             $this->middleware('auth')->except(['index','create']);
        */

        /*Aplicar o middleware apenas num method específico:
        $this->middleware('auth')->only('create'); */

        /*
            Aplicando em apenas alguns methods:
            Uso array neste caso:
            $this->middleware('auth')->only(['create','index']);
        */

        /*Criando um middleware dentro do controller.
        Quando for necessário criar um middleware para um controller específico, basta criar na classe controller mesmo.
        Crie aqui no method construtor mesmo */

        $this->middleware(function($request, $next){
            //dd('teste');

            return $next($request);
        })->except('index');

    }

    public function index()
    {
        dd('index');
    }


    public function create()
    {
        dd('create');
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
