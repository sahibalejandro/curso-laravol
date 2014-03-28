@extends('layout')

@section('title')
Iniciar sesión
@stop

@section('content')

<form action="{{ route('login') }}"
    method="post">
    {{ Form::token() }}

    <div>
        <label>Usuario:</label>
        <input type="text" name="username">
    </div>

    <div>
        <label>Contraseña:</label>
        <input type="password" name="password">
    </div>

    <div>
        <button type="submit">Iniciar sesión</button>
    </div>
</form>
@stop