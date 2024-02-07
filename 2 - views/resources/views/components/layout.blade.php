<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!--asset() é um helper. Nesse caso aqui, está importando o arquivo styles.css  -->
        <link rel="stylesheet" href= "{{ asset('css/styles.css') }}" >
        <?php
        /*Esse arquivo é uma classe anônima. Assim, não existe classe para esse componente.
        Não vou definir nada na classe, porque é anônima
            Estou criando um componente anônimo.
            Lá no arquivo propriedades.blade.php eu defini o valor de $title.
            Ela passa para esse componente
            <x-layout title="Home"> */

        ?>
        <title>{{$title}}</title>
    </head>
    <body>
        <div class="container">
            {{$slot}}
        </div>
    </body>
</html>
