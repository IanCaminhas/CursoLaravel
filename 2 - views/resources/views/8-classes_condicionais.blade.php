<x-layout $title = "Classes condicionais" >

@php
    $isAdmin = true;
    $authenticated = true;

@endphp

<?php
    /*'is-admin' só vai aparecer quando $isAdmin for true. Pode olhar no navegador e inspencionar
    'is-authenticated' só vai aparecer quando $authenticated for true. Pode olhar no navegador e inspencionar
    is-admin e is-authenticated serão as classes css mesmo. Para provar:

    Em public/css/styles poderemos encontrar:
    .is_admin {
        background-color: blue;
    }

    .is-authenticated {
        background-color: red;
    }

    Em suma: é assim que trabalho com classes condicionais no HTML
    */
?>

<button @class(['is-admin' => $isAdmin, 'is-authenticated' =>  $authenticated ])>teste</button>

</x-layout>
