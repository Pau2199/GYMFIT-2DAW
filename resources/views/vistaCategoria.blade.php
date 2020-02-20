@extends('layouts.master')
@section('titulo')
<title>Productos Categoria</title>
@stop
@section('js')
<script src="{{asset('js/vistaCategoria.js')}}"></script>
@stop
@section('content')
<div class="container">
    <div id="row" class="row">
        @foreach($productos as $valor)
        <div class="col-md-4">
            <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="{{asset('img/logo.png')}}" alt="imagen">
                <div class="card-body">
                    <p class="card-text">{{$valor->description}}</p>
                    <p class="card-text">asasasassasasasas</p>
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