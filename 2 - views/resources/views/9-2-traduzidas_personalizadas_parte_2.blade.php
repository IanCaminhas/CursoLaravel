<x-layout title="Mensagens traduzidas e personalizadas parte 2">
<?php
/*
    @lang('teste.message',[],'pt_BR')
    Existe o terceiro parâmetro 'pt_BR'
    Mas não percisa dele, pois vou usar uma message minha
    Essa chamada tem relação com lang/pt_BR/teste.php
    Pra que o [] ?

    @lang ou {{ __ }}... Se contitui a segunda forma
    {{ __('teste.message', ['name' => 'Cruzeiro FC']) }}
*/

?>

@lang('teste.message',[])
<br>
@lang('teste.message2',['name' => 'Ian'])
<br>
{{ __('teste.message', ['name' => 'Cruzeiro FC']) }}

</x-layout>
