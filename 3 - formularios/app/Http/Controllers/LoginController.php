<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('classe_para_validacao',['title'=>'login']);
    }

    public function indexValidacaoManual()
    {
        return view('validacao_manual',['title'=>'login']);
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
    public function store(LoginRequest $request)
    {
        $validated = $request->validated();
        dd($validated);
    }

    public function store2(Request $request)
    {
        /* Com $request->all(), estou pegando todos os campos preenchidos do formulário
        Era uma forma antiga de fazer validação. Nas versões mais novas,
        ficou depreciado.
        Comparação:
        É melhor fazer isso:
         $validated = $request->validated();
        dd($validated);
        Forma 1 de fazer manual
        */
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:3'
        ],[
            'required' => 'Preencha esse campo ae... :attribute',
            'email' => 'Acho que esse email ae não tá legal, verifica isso aí.'
        ]);

        if($validator->fails()){
            //->back() retorno de volta
            return redirect()->back()->withInput()->WithErrors($validator);
        }

        dd($validator);

        /* Forma 2 de fazer manual:

        Posso usar uma outra opção além do $validator->fails()
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:3'
        ])->validate();

        dd($validator);
        */
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
