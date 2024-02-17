@extends('master')

@section('content')

<h2>Users paginate enumerate</h2>
<ul>
    @foreach ($usersPaginateNumerate as $user)
        <li>{{$user->name}} - <small>{{$user->email}}</small></li>
    @endforeach
</ul>

{{$usersPaginateNumerate->links()}}

<h2>Users paginate next previous</h2>
<ul>
    @foreach ($usersPatginateNextPrevious as $user)
        <li>{{$user->name}} - <small>{{$user->email}}</small></li>
    @endforeach
</ul>

{{$usersPatginateNextPrevious->links()}}

@endsection
