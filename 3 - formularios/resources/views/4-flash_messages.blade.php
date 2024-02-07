<?php

    /* Forma 1 para resgatar flash messages:

        @if(Session::has('flashMessage'))
            {{Session::get('flashMessage')}}
        @endif

        forma 2 para resgatar flash messages: a utilização de um helper session()
        @if(session('flashMessage'))
            {{session('flashMessage')}}
        @endif
    */

?>

@if(session('logged'))
    <span style="background-color: green; color: white">{{session('logged')}}</span>
@endif


<form method="post" action="{{ route('login.store') }}">
    @csrf()
    <input type="text" name="email" value="messi@example.com" />
    <input type="text" name="password" value="123" />

    <button type="submit">Login</button>
</form>
