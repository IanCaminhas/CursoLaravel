<?php
    /*Com <x-layout>, vou herdar o  {{$slot}} que está em
    layout.blade.php*/
?>
<x-layout title="Home">
    <h2>propriedades</h2>

    @php
        $name = 'Ian'
    @endphp

    <!-- Se eu deixar name="$name", $name vai ser lido como string.
        Para ler $name como variável, coloco ":". Olhe: :name="$name"
    -->
    <x-button class="button_login" type="submit" hello="world" :name="$name">
        Comprar com propriedades
    </x-button>


</x-layout>


