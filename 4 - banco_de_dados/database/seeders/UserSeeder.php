<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*Faker já é uma dependência para gerar valores aleatórios. Já vem por padrão.
        Basta olhar no composer.php
        */

        /*Por padrão, os nomes que a lib traz são em inglês.
            Para gerar nomes me português, bast colocar 'pt_BR' no constructor
        */
        $faker = Factory::create('pt_BR');
        //Para cadastrar 10 registros, uso um looping for
        for($i=1;$i<=10;$i++) {
            DB::table('users')->insert([
                'name'=> $faker->name,
                'email' => $faker->email,
                'email_verified_at' => now(),
                'password' => bcrypt('123'),
                'remember_token' => Str::random(10)
             ]);
        }

    }
}
