@extends('master')

@section('content')

<?php
/*
   {{$user->tags->first()}} é um retorno de uma coluna do banco.
   Fiz um cast dessa coluna para collection. Se é collection, posso
   acessar o métodos dessa collection.

   Se eu tivesse feito um cast para array, poderia dar um implode
   para exibir todas as tags:
   implode(',',$user->tags).

   Lembrete do cast da classe User(um model):
    protected $casts = [
        'email_verified_at' => 'datetime',
        'is_admin' => 'string',
	    'created_at' => 'date:d/m/Y H:i:s',
        'tags' => 'collection'
    ];

*/
?>

<h2>Users</h2>
<ul>
    @foreach ($users as $user)
        <li>{{$user->name}} - <small>{{$user->created_at->diffForHumans()}} - {{$user->tags->first()}}</small></li>
    @endforeach
</ul>


@endsection
