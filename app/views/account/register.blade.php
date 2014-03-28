@extends('layout')

@section('title') Registrate @stop

@section('content')

<form action="{{ route('register') }}" method="post">
    
    {{ Form::token() }}

    <div>
        <label>Usuario:</label>
        <input type="text" name="username" value="{{{ Input::old('username') }}}">

        @if($errors->has('username'))
        {{{ $errors->first('username') }}}
        @endif
    </div>

    <div>
        <label>Nombre:</label>
        <input type="text" name="name" value="{{{ Input::old('name') }}}">

        @if($errors->has('name'))
        {{{ $errors->first('name') }}}
        @endif
    </div>

    <div>
        <label>Contraseña:</label>
        <input type="password" name="password">

        @if($errors->has('password'))
        {{{ $errors->first('password') }}}
        @endif
    </div>

    <div>
        <label>Confirma contraseña:</label>
        <input type="password" name="password_check">

        @if($errors->has('password_check'))
        {{{ $errors->first('password_check') }}}
        @endif
    </div>

    <div>
        <button type="submit">Registrar</button>
    </div>

</form>

@stop