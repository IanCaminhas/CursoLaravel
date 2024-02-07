<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesteController;

//Views - Classes condicionais

Route::get('/condicionais', function(){
    return view('classes');
});


?>
