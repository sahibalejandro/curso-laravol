@extends('layout')

@section('content')
    @foreach ($products as $Product)
    <div>
        <a href="{{ route('products.detail', $Product->id) }}">
            {{{ $Product->name }}}
        </a>
    </div>
    @endforeach
@stop