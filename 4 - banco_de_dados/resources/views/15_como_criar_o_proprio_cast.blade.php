@extends('master')

@section('content')

<?php

?>

<h2>Users</h2>
<ul>
    @foreach ($users as $user)
        <li>{{$user->name}} - <small>{{$user->created_at->diffForHumans()}}</small></li>
    @endforeach
</ul>


@endsection
