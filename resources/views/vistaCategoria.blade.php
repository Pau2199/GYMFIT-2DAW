@extends('layouts.master')
@section('titulo')
<title>Productos Categoria</title>
@stop
@section('js')
<script src="{{asset('js/vistaCategoria.js')}}"></script>
@stop
@section('content')
<div class="container">
    <div class="row padre">
        @foreach($productos as $key => $valor)
        <div class="col-md-4">
            <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="/storage/img/{{$valor->img[0]->ruta}}" alt="imagen">
                <div class="card-body">
                    <p class="card-text">{{$valor->description}}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div id="P{{$valor->id}}" class="btn-group text-center">
                            <span class="btn btn-info anyadirCarrito">Comprar</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <span id="cargarMasProductos" class="btn btn-info">Cargar más Productos</span>
</div>
@stop