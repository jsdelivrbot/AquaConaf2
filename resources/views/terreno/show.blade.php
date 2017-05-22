@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Mostrar terreno
    </h1>
    <br>
    <form method = 'get' action = '{!!url("terreno")!!}'>
        <button class = 'btn btn-primary'>Inicio terreno</button>
    </form>
    <br>
    <table class = 'table table-bordered'>
        <thead>
            <th>Dato</th>
            <th>Valor</th>
        </thead>
        <tbody></tbody>
    </table>
</section>
@endsection