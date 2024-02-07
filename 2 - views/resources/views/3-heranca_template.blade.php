<!-- Referencio o template master-->
<!-- Para passar valores para o master template, uso: ['title' => 'Home Title']-->
@extends('master', ['title' => 'Home Title'])

<!--Para colocar o conteúdo, preciso definir @section('content')
('content') é referente a @yield('content')
-->
@section('content')
    <h2>Home</h2>
@endsection

@section('scripts')
    <script>
        alert('teste');
    </script>
@endsection
