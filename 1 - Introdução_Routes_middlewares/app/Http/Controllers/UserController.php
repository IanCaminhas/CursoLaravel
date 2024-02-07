<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //Listagem dos users para ser usada pela routes/api.php
    public function listUsersAPI() {
        $data = [
            'user1' => [
                'id' => 1,
                'email' => 'cr7@gmail.com',
                'firstName' => 'CR7',
                'lastName' => 'Cristiano Ronaldo'
            ],
            'user2' => [
                'id' => 2,
                'email' => 'mane@gmail.com',
                'firstName' => 'Sadio',
                'lastName' => 'Mané'
            ],
            'user3' => [
                'id' => 3,
                'email' => 'benzema@gmail.com',
                'firstName' => 'Karim',
                'lastName' => 'Benzema'
            ],

        ];

        return $data;
    }

    public function index(){
       dd('list user');
    }

    public function show($id){
        dd('show user com o id '.$id);
    }

    public function edit($id){
        dd('edit user com o id '.$id);
    }

    public function update(){
        dd('update');
    }

    public function create(){
        dd('create');
    }

    public function store(){
        dd('store user');
    }

    public function destroy(){
        dd('delete user');
    }

}
