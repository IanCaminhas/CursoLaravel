<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesteController;

//Assunto do arquivo: Blade Components#03 - Métodos na classe do componente

Route::get('/metodos', function(){
    return view('metodo_classe_componente');
});


?>
