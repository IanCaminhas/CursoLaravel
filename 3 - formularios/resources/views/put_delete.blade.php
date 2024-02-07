<?php
/*route('user.update', 12)
    12 é o parâmetro da rota. Esse 12 é o id do usuário No fim vai ficar:
    <form action="http://localhost:8000/user/edit/12" method="post"

    Além disso: a rota do web.php espera receber um put/DELETE mas o method é post.
    E agora ? como faço para enviar essa requisição do tipo PUT ?
    Coloco o <input type="hidden" name="_method" value="PUT">
    name tem que ser igual a "_method". Se não, não funciona.

    Tem como <input type="hidden" name="_method" value="PUT">. O Laravel possui uma anotação para isso.
    @method('PUT') ou @method('DELETE').
    Mas no fim das contas, vai ser convertido em <input type="hidden" name="_method" value="PUT">
    Basta olhar no inspecionar do navegador


*/
?>
<h1>PUT sem diretiva method</h1>
<form action="{{ route('user.update',12) }}" method="post">
    <input type="hidden" name="_method" value="PUT">
    <input type="text" name="firstname" value="Cristiano">
    <input type="text" name="lastName" value="Ronaldo">

    <button type="submit">Update user</button>
<form>

<h1>DELETE sem diretiva method</h1>
<form action="{{ route('user.delete',12) }}" method="post">
    <input type="hidden" name="_method" value="DELETE">
    <input type="text" name="firstname" value="Cristiano">
    <input type="text" name="lastName" value="Ronaldo">

    <button type="submit">Update user</button>
<form>

<h1>PUT com diretiva method</h1>
<form action="{{ route('user.update',12) }}" method="post">
    @method('PUT')
    <input type="text" name="firstname" value="Cristiano">
    <input type="text" name="lastName" value="Ronaldo">

    <button type="submit">Update user</button>
<form>

<h1>DELETE com diretiva method</h1>
<form action="{{ route('user.delete',12) }}" method="post">
    @method('DELETE')
    <input type="text" name="firstname" value="Cristiano">
    <input type="text" name="lastName" value="Ronaldo">

    <button type="submit">Update user</button>
<form>
