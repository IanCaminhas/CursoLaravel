<!-- Fazendo assim, eu sempre vou ter um botão com nome de Button.
Isso não é bom, pois esse componente pode receber outro nome ao longo das views. Em suma:
Quero variar o texto do botão
<button style="background-color:blue; color:white">Button</button> -->

<!-- O valor da variável text vai ser recebida através das views
Os estilo aqiu foi aplicado de forma inline

<button style="background-color:blue; color:white">
    {{$slot}}
</button>
-->

<?php
/*
<!--attributes: serve para deixa o botão com estilização dinâmica -->
<button {{ $attributes }}>
    <!-- Não consigo acessar a variável $hello. Essa variável vem lá da view: propriedades.blade.php
        <x-button class="button_login" type="submit" hello="world"> </x-button>
        Para isso, tive que configurar a classe Button.
        $hello não vem por padrão em  $attributes.
    -->
    {{$hello}}
    {{$slot}}
</button>
*/
?>

<!-- Fazendo $attributes->merge(['class'=>'button_width']),
vou pegar todos os atributos de button lá da view e ainda
usar o css button_width que veio lá de public/css
-->
<button {{ $attributes->merge(['class'=>'button_width']) }}>
    {{$name}}
    {{$slot}}
</button>
