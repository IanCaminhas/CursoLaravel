<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    <body>
        <!-- Trabalhando sem a diretiva do blade. Trabalhand com PHP puro
        <h2>Home</h2>
        <? //php if(true): ?>
            teste
        <? //php endif ?>
        -->
        <div>
        <!-- Usando a diretiva do Blade Laravel -->
        <h2>Teste IF</h2>
            @if(true)
                teste
            @endif
        </div>

        <div>
            <h2>Teste unless</h2>
            @php
                $name='Ian'
            @endphp

            @unless (!$name==='Cruzeiro FC')
                teste unless
            @endunless
        </div>
    </body>
</html>
