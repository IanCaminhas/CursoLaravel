<?php

//use App\Models\User;
use Illuminate\Support\Facades\Route;
use Http\Controllers\HomeController;

//Tema do arquivo: Rotas dinâmicas

/*
Rota dinâmica ou rota com parâmetro:

O parâmetro id. Exemplos de requisições com rotas dinâmicas:
http://localhost:8000/user/teste/1
http://localhost:8000/user/teste/2
http://localhost:8000/user/teste/3

Busco o id pela functon($id) {}
o id de '/user/{id}' não precisa igual ao id de function($id).
Posso colocar function($userId)
Não é uma boa prática fazer isso!

'/user/{name}/age/{age}', function($name,$age):
Posso colocar function($nameUser,$ageUser), ainda posso colocar:
function($teste,$ageUser)

Para restringir valores no parâmetro da requisição ????
uso where(). Para isso, vou utilizar expressões regulares.
where('name', '[a-z]+') -> só vai aceitar letras.
Se eu não seguir a restrição, uma página 404(not found) será emitida.
Usando expressões regulares, é meio trabalhoso. Posso colocar funções já definidas:
Fazendo a rota com Regex(restrição):

Route::get('/user/{name}/age/{age}', function($name,$age) {
    dd("Name {$name} age {$age}");
})->where(['name' => '[a-z]+', 'age' => '[0-9]+']);

Funções definidas do próprio Laravel:
Route::get('/user/{name}/age/{age}', function($name,$age) {
    dd("Name {$name} age {$age}");
})->whereAlpha('name')->whereNumber('age');

E seu quiser ian-pereira ? vou ter que usar regex, infelizmente
*/

Route::get('/user/{name}/age/{age}', function($name,$age) {
    dd("Name {$name} age {$age}");
})->whereAlpha('name')->whereNumber('age');

Route::get('/user/{name}/age/{age}', function($name,$age) {
    dd("Name {$name} age {$age}");
})->where(['name' => '[a-z]+', 'age' => '[0-9]+']);

Route::get('/user/{name}/age/{age}', function($name,$age) {
    dd("Name {$name} age {$age}");
})->where('name', '[a-z\-]+')->whereNumber('age');









