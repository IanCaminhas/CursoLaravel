<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{$title}}</title>
        <linK rel="stylesheet" href="styles.css">

    </head>
    <body>
        <div class="container">
            <!--'partials.header' vem de resources/views/partials/header.blade.php
                isso é um include que vai em todas as páginas que herdarem deste template master.
                No caso, o header viria em todas as páginas.
                Posso tbm ter esses includes nas páginas filhas
            -->
            @include('partials.header')

            <!-- Aqui posso colocar qualquer nome além de 'content'
                Aqui vai ter todo o conteúdo que as outras views vão colocar
            -->
            @yield('content')

            <!-- Pra inserir os javascripts em todas as páginas, basta colocar:  @yield('scripts').-->
            @yield('scripts')
        </div>
    </body>
</html>
