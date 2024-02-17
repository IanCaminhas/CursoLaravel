@extends('master')

@section('content')

<?php
/*
    {{$user->email_verified_at}} fica um negócio descritivo e ilegível para
    o usuário ler. Solução:
    O eloquent tem um recurso chamado carbon. Esse recurso
    deixa mais legível para humanos.
    Fazendo <li>{{$user->name}} - <small>{{$user->email_verified_at}}</small></li>, a saída é:
    Tatiana Leon - 2024-02-12 17:11:15

    <li>{{$user->name}} - <small>{{$user->email_verified_at->diffForHumans()}}</small></li>
    Olha a saída: Tatiana Leon - 2 days ago
    2 day ago fica mais legível

*/
?>

<h2>Users</h2>
<ul>
    @foreach ($users as $user)
        <li>{{$user->name}} - <small>{{$user->email_verified_at->diffForHumans()}}</small></li>
    @endforeach
</ul>


@endsection
