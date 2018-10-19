@extends('layouts.main')

@section('content')
    <div>
        <p class="display-4">Mis Pedidos</p>
        <a href="/pedidos/create" class="btn btn-danger">Nuevo Pedido</a>
    </div>
    <br/>
    @if (count($pedidos) > 0)
        <ul class="list-group">
            @foreach ($pedidos as $pedido)
                <a href="/pedidos/{{$pedido->id}}"><li class="list-group-item">{{$pedido->price}}</li></a>
            @endforeach
        </ul>
    @else
        
    @endif
@endsection