<?php

namespace App\Providers;

use App\View\Composers\HomeComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //Todas as views que chamarem o 'composer', eu vou usar o HomeComposer
        View::composer('composer', HomeComposer::class);
    }
}
