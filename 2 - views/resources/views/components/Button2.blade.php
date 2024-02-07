<?php
    /*
        Isso está lá em props.blade.php: <x-button2 name="Ian" type="success" age="29"></x-button>
        Para capturar os dados do botão, preciso usar o @props.
        Se eu não capturar via props, vai aparecer como propriedade
        do botão lá no navegador. Não quero isso.

        Por padrão o name="" e o age="" aparecem em $attributes
        Quando coloco @props(['name', 'age']), não vai mais estar disponível em $attributes.
        Só vai aparecer quando chamar esses valores.
        Assim, o restante vai aparecer em {{$attributes}}
    */
?>

@props(['name', 'age'])

<button2 {{$attributes}}>
    {{$name}} {{$age}}
</butto2>
