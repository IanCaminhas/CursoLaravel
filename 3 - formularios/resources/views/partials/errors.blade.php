<?php
/*
    @if($errors->any()) existe algum erro ?
    se sim, exiba o erros:
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    <ul>
*/

?>

@if($errors->any())
<div class='alert alert-danger'>
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    <ul>
</div>
@endif
