<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('pt_BR');
        /*Para pegar os ids dos usuários para serem usados na segunte rondomização: FK userId posts.
            toArray() -> transforma num array.
            Preciso importar o Model User também: use App\Models\User;
        */
        $users = User::all()->pluck('id')->toArray();

        /*
            faker->sentence()
            Se eu não informar nada, vai me dar um texto de 6 palavras.
        */

        for($i=1;$i<=10;$i++) {
            DB::table('posts')->insert([
                //Também posso tentar fazer: 'userId'=> User:all()->random()->id
                'userId'=> $faker->randomElement($users),
                'title' => $faker->sentence(4),
                'slug' => $faker->slug,
                'content' => $faker->paragraph
             ]);
        }

    }
}
