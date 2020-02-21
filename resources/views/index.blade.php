@extends('layouts.master')
@section('titulo')
<title>Index</title>
@stop
@section('content')
<div id="carouselImagenes" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselImagenes" data-slide-to="0" class="active"></li>
        <li data-target="#carouselImagenes" data-slide-to="1"></li>
        <li data-target="#carouselImagenes" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-md-block d-none w-100 imagenCarrusel" src="{{asset('img/definicionGymfit2.jpg')}}" alt="Primera Imagen">
            <img class="d-md-none d-block w-100 imagenCarrusel" src="{{asset('img/definicionGymfit1.jpg')}}" alt="Primera Imagen">
        </div>
        <div class="carousel-item">
            <img class="d-md-block d-none w-100 imagenCarrusel" src="{{asset('img/ofertaPantalones1.jpg')}}" alt="Segunda Imagen">
            <img class="d-md-none d-block w-100 imagenCarrusel" src="{{asset('img/ofertaPantalones2.jpg')}}" alt="Segunda Imagen">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100 imagenCarrusel" src="{{asset('img/logo.png')}}" alt="Tercera Imagen">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselImagenes" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </a>
    <a class="carousel-control-next" href="#carouselImagenes" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </a>
</div>
<div class="container">
    <div class="row">
        @foreach($productos as $key => $valor)
        <div class="col-md-4">
            <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="/storage/img/1.jpg" alt="imagen">
                <div class="card-body">
                    <p class="card-text">{{$valor->description}}</p>
                    <p class="card-text">{{$valor->price}}€</p>
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
</div>
@stop