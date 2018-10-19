@extends('layouts.main')

@section('content')
    <div>
        <p class="display-4">Pedido</p>
        <a href="/pedidos" class="btn btn-link">Volver</a>
    </div>
    <br/>
    @if (!is_null($pedido))
        <p class="display-6">{{$pedido->price}}</p>
    @else
        
    @endif
@endsection