@extends('layouts.main')

@section('content')
    <div>
        <p class="display-4">Nuevo Pedido</p>
    </div>
    <br/>
    {!! Form::open(['action' => 'PedidosController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('items', 'Items del Pedido')}}
            {{Form::textarea('items', '', ['class' => 'form-control', 'placeholder' => 'Productos'])}}
            <br/>
            {{Form::label('price', 'Precio')}}
            {{Form::number('price', 0, ['class' => 'form-control'])}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        <a href="/pedidos" class="btn btn-link">Cancelar</a>
    {!! Form::close() !!}
@endsection