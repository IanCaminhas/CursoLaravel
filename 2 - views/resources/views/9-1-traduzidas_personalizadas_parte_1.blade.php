<x-layout title="Mensagens traduzidas e personalizadas parte 1">

<?php //Isso é para mostrar as mensagens nativas de erros de validação dos campos email e password ?>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('login.store') }}" method="post">
        <input type="text" name="email" value="teste@gmail.com"/>
        <input type="text" name="password" value="123"/>
        <button type="submit">Logar</button>
    <form>

</x-layout>
