<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexComposer()
    {
        /*Tá, mas se eu quiser o conteúdo da variável $users, basta apenas eu fazer isso abaixo:
        Mas imagina eu ter que chamar no banco de dados de novo, sendo que que já foi chamado
        lá no  xptoController ? chamar aqui denovo ?
        $users = User::all();
        return view('home', [
            'name' => 'Ian',
            'users' =>  $users
        ]);
        */

        //Por fim, basta retornar a view que a variável name vai estar disponível. Vai estar de nome $data
        return view('composer');
    }

    public function indexDiretivas() {
        return view('diretivas');
    }

    public function signUpHerancaTemplate() {
        return view('heranca_template', [
            'title' => 'Home'
        ]);
    }

    public function indexSlots(){
        return view('slots');
    }

    public function indexPropriedades(){
        return view('propriedades');
    }

    public function indexMetodosClasseComponente(){
        return view('metodo_classe_componente');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
