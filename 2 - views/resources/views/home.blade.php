<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    <body>
           <!-- usando a marcação php para exibir cont. de variávies <h2>Home, <?php //echo $name; ?> <?php //echo $age; ?></h2> -->
           <!-- Esse data vem do composer do laravel. Nome do arquivo: HomeComposer  <h2>{{ $data }}</h2> -->
           <h2>Home</h2>
    </body>
</html>
