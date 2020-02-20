@extends('layouts.master')
@section('titulo')
<title>Productos Categoria</title>
@stop
@section('js')
<script src="{{asset('js/vistaCategoria.js')}}"></script>
@stop
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            @foreach($productos as $valor)
            <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="../storage/img/{{$valor->img[0]->ruta}}" alt="imagen">
                <div class="card-body">
                    <p class="card-text">{{$valor->description}}</p>
                    <p class="card-text">Talla: {{$valor->size}} - Color: {{$valor->colour}} - Precio: {{$valor->price}}€</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div id="P{{$valor->id}}" class="btn-group text-center">
                            <span id="anyadirCarrito" class="btn btn-info">Comprar</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@stop