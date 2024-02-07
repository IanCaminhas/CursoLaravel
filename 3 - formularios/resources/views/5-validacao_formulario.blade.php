<?php
    /* Aqui estou exibindo todas as mensagens de validação emcima.
        @include('partials.errors')

        <form method="post" action="{{ route('login.store') }}">
            @csrf()
            <input type="text" name="email" value="messi@example.com" />
            <input type="text" name="password" value="123" />
            <button type="submit">Login</button>
        </form>

        Se eu quiser exibir abaixo do campo ?

        <form method="post" action="{{ route('login.store') }}">
            @csrf()
            <input type="text" name="email" value="messi@example.com" />
            @error('email')
                {{ $message }}
            @enderror
            <input type="text" name="password" value="123" />
            @error('password')
                {{ $message }}
            @enderror
            <button type="submit">Login</button>
        </form>

        Para exibir o erro, deve ser a variável $message

        <form method="post" action="{{ route('login.store') }}">
             @csrf()
            <input type="text" name="email" value="messi@example.com" />
            @error('email')
                {{ $message }}
            @enderror
            <input type="text" name="password" value="123" />
            @error('password')
                {{ $message }}
            @enderror
            <button type="submit">Login</button>
        </form>

        Terceira forma com  {{ $errors->first('email') }}:
            <form method="post" action="{{ route('login.store') }}">
                @csrf()
                <input type="text" name="email" value="messi@example.com" />
                {{ $errors->first('email') }}
                 <input type="text" name="password" value="123" />
                 {{ $errors->first('password') }}
                <button type="submit">Login</button>
            </form>

    */
?>

<form method="post" action="{{ route('login.store') }}">
    @csrf()
    <input type="text" name="email" value="messi@example.com" />
    {{ $errors->first('email') }}
    <input type="text" name="password" value="123" />
    {{ $errors->first('password') }}
    <button type="submit">Login</button>
</form>

