<?php

    /* <input type="hidden" name="_token" value="{{ $token }}">
    Para trabalhar com tokens, posso fazer um input do tipo hidden e pegar o token gerado pelo laravel.
    Porém, o Laravel adota a seguinte marcação para capturar esse token: @csrf()
    Disso aqui <input type="hidden" name="_token" value="{{ $token }}">
    para @csrf()

    */

?>

<h2>CSRF sem csfr()</h2>
<form action="{{ route('user.delete',12) }}" method="post">
    @method('DELETE')
    <input type="hidden" name="_token" value="{{ $token }}">
    <input type="text" name="firstname" value="Cristiano">
    <input type="text" name="lastName" value="Ronaldo">

    <button type="submit">Delete user</button>
<form>

<h2>CSRF com csfr()</h2>
<form action="{{ route('user.delete',12) }}" method="post">
    @method('DELETE')
    @csrf()
    <input type="text" name="firstname" value="Cristiano">
    <input type="text" name="lastName" value="Ronaldo">

    <button type="submit">Delete user</button>
<form>
