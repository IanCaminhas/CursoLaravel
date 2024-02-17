@extends('master')

@section('content')

<?php
    /* {{$user->FullName}} veio do segunte Acesssor: getFullNameAttribute().
        Classe: User_acesssors_e_Mutators.
        Para acessar como FullName, preciso definir o method getFullNameAttribute().
    */
?>

<h2>Users</h2>
<ul>
    @foreach ($users as $user)
        <li>{{$user->name}} -{{$user->FullName}}- {{$user->email}} <small>{{$user->created_at->diffForHumans()}}</small></li>
    @endforeach
</ul>


@endsection
