<?php

use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Route;

//Assunto arquivo: Acesssors e Mutators

Route::get('/', function () {

    //$users = User::all();

    $user = User::first();
    //Faço um setNameAttribute($value) {} isso é um mutator está na model User_acessors_e_mutators
    $user->name = 'Teste';
    dd($user->name);

    $user = User::first();
    $user->email = 'Teste';
    dd($user->email);



    //Muito importante.
    /* Trabalhando com Acesssors e Mutators é a mesmo raciocínio abaixo:
    Não estou concluindo que os Acesssors e Mutators trabalham com a lógica abaixo.
    É apenas um paralelo

    class Person {

        private $data = [];

        public function __get($key) {
            return $this->data[$key];
        }

        public function __set($key, $value){
            $this->data[$key] = $value;
        }
    }

    $person = new Person;
    $person->name = 'Dybala';
    dd($person->name);

*/



    return view('acessors_e_mutators')->with('users',$users);

});
