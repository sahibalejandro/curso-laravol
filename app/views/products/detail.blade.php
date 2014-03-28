@extends('layout')

@section('content')
    <h2>{{{ $Product->name }}}</h2>
    <p>{{{ $Product->description }}}</p>
    <h3>
        Precio: ${{ number_format($Product->price, 2) }}
        [<a href="{{ route('products.add', $Product->id) }}">Agregar a carrito</a>]
    </h3>
    <img src="{{ asset('uploads/products/'.$Product->photo) }}" alt="" width="100">
@stop