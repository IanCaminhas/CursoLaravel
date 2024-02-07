<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

/*Dentro do method middleware, posso passar uma string ou array.
Se eu usar string, só vou poder chamar um middleware.
Se eu usar array, posso chamar quantos middlewares eu quiser.
Posso criar um middleware da segiunte maneira:
    Route::middleware()->get('/', [HomeController::class, 'index']);

    Entretanto, é uma boa prática criar os arquivos middlewares
    na pasta app/Http/Middleware
    Por padrão, o laravel já fornece a implementação de vários middlewares
    na pasta app/Http/Middleware

    Para registrar o middleware, uso o arquivo Kernel.php que fica dentro de app/Http/
    Esse arquivo Kernel contém 3 grupos de middlewares:
        1 - grupo dos globais(protected $middleware = [];) -> todas as requisições passarão pelos middlewares contidos neste grupo.

        2 - Middleware Group($middlewareGroups = [];)-> são agrupados de acordo com índices específicos. No caso, vem com dois índices:
        'web' e 'api'. As rotas que tiverem esse 'web', todos os middlewares serão executados.

        3 - $routeMiddleware = []; -> onde podemos colocar os middlewares(manualmente) nas rotas.
            Esse array já vem com a lista de middlewares pré-configurados.
            Exemplo:
            Route::middleware('auth')->get('/', [HomeController::class, 'index']); usei o middleware 'auth' pré-configurado.

        Se eu der um php artisan route:list, as rotas da aplicação serão listadas.
        E cada linha possui os middlewares associados à rota. Vão constar os grupos desses middlewares associados.

        VerifyCsrfToken é um middleware global dentro do Laravel. Ele aceita requisições GET. O que for diferente de GET, um statuscode
        é exibido(a página é bloqueada).
        Se eu comentar o \App\Http\Middleware\VerifyCsrfToken::class, nenhuma requisição vai sofrer bloqueios.

        No grupo dos middlewares globais:
        Se a requisição passou pelo primeiro middleware, o segundo middleware também vai atuar.
        Se passar pelo segundo, o terceiro também vai filtrar. Essa apreciação vai até o último middleware.
        Quando não tiver mais middlewares, o que existir dentro da rota é executado.

        Também existe o middleware Trim_Strings.php: Ela tira o espaço final e final nas requisições.
        Esses espaços podem aparecer na URI, nos query parâmeters, etc.
        Se eu comentar esse middleware lá no arquivo Kernel, os espaços em branco serão permitidos.
        \App\Http\Middleware\TrimStrings::class

        Se eu comentar(middleware ConvertEmptyStringsToNull), o que vai acontecer ?
        \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class
                Esse middleware converte o envio de valores vazios enviados via formulário.
                Essa conversão é para o valor null.
                Se eu comentar, vai permitir o envio de valores vazios. No final, vai ser aparecer o valor "";
                será exibido via dd(), var_dump(), entre outros.
*/

Route::middleware(['auth','signed'])->get('/login',[HomeController::class, 'index'])->name('login');



?>

