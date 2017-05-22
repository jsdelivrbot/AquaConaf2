@extends('scaffold-interface.layouts.app')
@section('title','Edit')
@section('content')

<section class="content">
    <h1>
        Modificar terreno
    </h1>
    <form method = 'get' action = '{!!url("terreno")!!}'>
        <button class = 'btn btn-danger'>Inicio terreno</button>
    </form>
    <br>
    <form method = 'POST' action = '{!! url("terreno")!!}/{!!$terreno->
        id!!}/update'> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <button class = 'btn btn-primary' type ='submit'>Modificar</button>
    </form>
</section>
@endsection