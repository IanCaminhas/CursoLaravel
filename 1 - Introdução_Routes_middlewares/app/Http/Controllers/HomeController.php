<?php

namespace App\Http\Controllers;

class HomeController {
    /*
    public function index() {
        dd('home controller');
    }
    */

    public function index(){
        return view('welcome');
        //esse index serve para realizar a listagem de algo
    }

    public function show(){
        //quando quero pegar algo
    }

    public function edit(){
        //mostrar o formulário para atualizar algo
    }

    public function update(){
        //para atualizar algo
    }
    public function create(){
        //quando quero mostrar um formulário de cadastro
    }

    public function store(){
        //Cadastrar algo
    }

    public function destroy(){
        //deletar ou remover algo
    }

}


?>
