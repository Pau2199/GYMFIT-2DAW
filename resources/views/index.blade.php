@extends('layouts.master')
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
<h2 class="text-center text-uppercase font-weight-bold mt-2">Más vendidos</h2>
<div class="container-fluid">
    <div class="row justify-content-center text-center mb-5">
        <div class="col-md-4">
            <div>
                <img class="imgaenesProductos" src="{{asset('img/productos/pantalones.jpg')}}" alt="pantalones">
            </div>
        </div>
        <div class="col-md-4">
            <div>
                <img class="imgaenesProductos" src="{{asset('img/productos/pantalones.jpg')}}" alt="pantalones">
            </div>
        </div>
        <div class="col-md-4">
            <div>
                <img class="imgaenesProductos" src="{{asset('img/productos/pantalones.jpg')}}" alt="pantalones">
            </div>
        </div>
    </div>
</div>
@stop