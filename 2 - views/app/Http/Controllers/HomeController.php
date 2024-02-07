<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    //esse method chama a view da página inicial
    public function index() {
        //return view('welcome'); forma de chamar a view

        /*Outra forma de invocar a view
        As views sempre devem estar na pasta view
        Preciso fazer o import necessário para usar o View::make()
            Import necessário: use Illuminate\Support\Facades\View;
            return View::make('home');
            Só preciso do nome da view. Não preciso do .blade.php.
            Exemplo: welcome.blade.php perciso apenas do welcome.

            Vou usar o home.blade.php ao invés do welcome.blade.php

            view('home');
            Arg1: é a view
            Arg2(opcional): é um array. Geralmente é o $data=[]. Esse array são os dados que vou passar lá pra view
            Arg3(opcional):

            Posso usar:
            return view('home', [
                'name'=> 'Ian',
                'age' => 29
            ]);
            }
            Para recuperar a variável 'name' lá na view, uso:
            <h2>Home, <?php echo $name; ?></h2>

            Posso também usar o ->with() para passar variáveis para a view:
             return view('home')->with('name', 'Ian');
             Para passar outra variável, preciso chamar ->with() novamente:
             return view('home')->with('name', 'Ian')->with('age', 29);

             Estou chamando o arquivo admin que está dentro da pasta admin(resources/views/admin/admin.blade.php)
             return view('admin.admin');

           Tá, mas se eu quiser o conteúdo da variável $users, basta apenas eu fazer isso abaixo:
            Mas imagina eu ter que chamar no banco de dados de novo, sendo que que já foi chamado
            lá no xptoController ? chamar aqui denovo ?
            $users = User::all();
            return view('home', [
                'users' =>  $users
            ]);
            Solução: View composer

        */

        /*Como estou usando o view composer,
            a variavel name já está disponível.
            O valor dela está em $data.
        */
        return view('home');

    }

}
