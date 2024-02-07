<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->group(base_path('routes/web.php'));
        });
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        //Essa estrutura já veio pré-configurada
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });

        /*Limitador criado. 'user' é o identificador de acesso.
        Esse identificador precisa ser colcado lá na rota */

        RateLimiter::for('users', function(Request $request){
            /*perMinute(60) é a limitação. Além do perMinute(), tenho: perDay(), perHour(), perMinute(), perMinutes()
            perMinute() recebe a quantidade de requisições. No caso abaixo, aceita 3 requisições por minuto
            Se ultrapassar 3 requisições por minuto, o statusCode 429 é gerado. Saída: 429 | TOO MANY REQUESTS.

            ->by($request->ip());
            Vai limitar a quantidade de 3 acessos por minuto, mas levando em consideração o ip do usuário.
            Em suma: vai pegar o ip do usuário, vai ver se esse ip realizou 3 requisições por minuto e vai bloquear.
            Posso fazer por id do usuário também:
                ->by($request->user()->id)
            Como fica no final:
            return Limit::perMinute(3)->by($request->ip());
            return Limit::perMinute(3)->by($request->user()->id);

            Posso colocar uma resposta personalizada:
            >response(function() {
                return response('My error custom', 429);
            });

            Posso fazer a segiunte lógica:
            Se o usuário tiver logado, o limite vai ser de 2 acessos por minuto.
            Se não estiver logado, vai ser 5 acessos por minuto
            RateLimiter::for('users', function (Request $request) {
                return $request->user() ? Limit::perMinute(2) : Limit::perMinute(5);
            });

            */
            return Limit::perMinute(3)->by($request->ip())->response(function() {
                return response('My error custom', 429);
            });
        });
    }
}
