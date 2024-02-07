<?php
    /*Com <x-layout>, vou herdar o  {{$slot}} que está em
    layout.blade.php*/
?>
<x-layout>

    <h2>Slot</h2>
    <?php
    /*
        Posso finalizar também com </x-button>
        button é o componente representado em button.blade.php.
        <x-button></x-button> ou </x-button>
    */
    ?>
    <x-button>
    <?php
    /*
        name="text" tem que ser igual a {{$text}} do button.blade.php
        <x-slot name="text">Comprar</x-slot>
        Trabalhar com a palavra x-slot é ruim.
        Para suprimir ela, basta eu colocar {{$slot}}
        ao invés de {{$text}} lá no button.blade.php
    */
    ?>
        Comprar
    </x-button>

</x-layout>


