<div>
    <!--
        $nameComParametro('Caminhas') é um method da classe user.php
    -->
    {{$nameComParametro('Caminhas')}}

     <!--$name é um method. Mas como não vou passar nada de parâmentro, não preciso dos ().
        Esse $users é o method de user.php
    -->
    {{ $name }}
    Lista de users

    <ul>
         <!--$users é um method. Mas como não vou passar nada de parâmentro, não preciso dos ().
        Esse $users é o method de user.php
        -->
        @foreach($users as $user)
            <li>{{$user->name}}</li>
        @endforeach
    </ul>

</div>
