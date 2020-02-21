@extends('layouts.master')
@section('titulo')
<title>Carrito</title>
@stop
@section('css')
<link rel="stylesheet" href="{{asset('css/estiloCarrito.css')}}" type="text/css">
@stop
@section('js')
<script src="{{asset('js/carrito.js')}}"></script>
@stop
@section('content')
<div class="container my-4">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>

                            <th scope="col">Producto</th>
                            <th scope="col" class="text-center">Cantidad</th>
                            <th scope="col" class="text-right">Precio</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
        <div class="col mb-2">
            <div class="row">
                <div class="col-sm-12  col-md-6">
                    <a href="{{url('/')}}">  <span class="btn btn-block btn-light continuar">Continuar Comprando</span></a>
                </div>
                <div class="col-sm-12 col-md-6 text-right">
                    <a href="{{url('pagar')}}"> <span class="btn btn-lg btn-block btn-info text-uppercase pago">Realizar Pedido</span></a>
                </div>
            </div>
        </div>
    </div>
</div>
@stop