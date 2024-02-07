<?php

/*
    O comportammento padrão do Laravel é o seguinte na questão da validação:
    Se tiver alguma violação de campo, as mensagens de erro são exibidas e a página é recarregada novamente. Blz ?
    Mas o formulário é limpado. Aí faço o usuário digitar novamente. Ruim d+
    Solução: helper old()
    Assim, o valor que usuário preencheu será mantido.

    Outro problema:
    Para o campo password, o usuário deverá ser digitado novamente. É uma questão de segurança
    do próprio Laravel.
*/

?>


<form method="post" action="{{ route('login.store') }}">
    @csrf()
    <input type="text" name="email" value="{{ old('email') }}" />
    {{ $errors->first('email') }}
    <input type="text" name="password" value="{{ old('password') }}" />
    {{ $errors->first('password') }}
    <button type="submit">Login</button>
</form>

