<?php

namespace App\Http\Middleware;

use Closure;
use Exception;
use Illuminate\Http\Request;

class Teste
{
    /*
        Com o Request $request, posso pegar os dados do formulário por exemplo.
        Se a validação ou requisição não deram nenhum problema, passarei para o próximo middleware(return $next($request)).
        Se não tiver um próximo middleware, vai ser executado o que estiver na rota(web.php).
        string $name não vem por padrão utilizando o php artisan make:Middleware. Preciso colocar ele. Posso colocar o nome que eu quiser

    */
    public function handle(Request $request, Closure $next, string $name)
    {
        //dd('middleware '.$name);
        /*Se a validação der algum problema, não posso deixar chegar em return $next($request). Ou seja, ir para o próximo middleware
        Essa validação é norteada por algum if, geralmente.
            Alternativas: lançar uma exception, dar um retun false, redirecionar o usuário para outra rota, etc.
        */

        throw new Exception('Error Processing Request', 1);

        return $next($request);
    }
}
