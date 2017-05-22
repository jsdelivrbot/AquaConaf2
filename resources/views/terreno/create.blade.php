@extends('scaffold-interface.layouts.app')
@section('title','Create')
@section('content')

<section class="content">
    <h1>
        Crear terreno
    </h1>
    <form method = 'get' action = '{!!url("terreno")!!}'>
        <button class = 'btn btn-danger'>Inicio terreno</button>
    </form>
    <br>
    <form method = 'POST' action = '{!!url("terreno")!!}'>
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <button class = 'btn btn-primary' type ='submit'>Crear</button>
    </form>
</section>
@endsection