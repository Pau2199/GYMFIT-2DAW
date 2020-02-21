@extends('layouts.master')
@section('titulo')
<title>Realizar Pago</title>
@stop
@section('css')
        <link rel="stylesheet" href="{{asset('css/estiloCrud.css')}}" type="text/css">
@stop
@section('js')
        <script src="{{asset('js/tarjeta.js')}}"></script>
@stop
@section('content')
        <title>GYMFIT</title>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 mt-5">
                    <form action="#" class="credit-card-div">
                        <div class="panel panel-default" >
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="number" class="form-control" id="numTarjeta" placeholder="Escriba Numero Tarjeta"/>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                        <span class="help-block text-muted small-font" > Mes Expira</span>
                                        <input type="text" class="form-control" id="mesExpira" placeholder="MM"/>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                        <span class="help-block text-muted small-font" >  Año Expira</span>
                                        <input type="text" class="form-control" id="anyoExpira" placeholder="YY" />
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                        <span class="help-block text-muted small-font" >  CCV</span>
                                        <input type="text" class="form-control" id="cvv" placeholder="CCV"/>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-12 pad-adjust">

                                        <input type="text" class="form-control" id="dueñoTarjeta" placeholder="Nombre del propietario" />
                                    </div>
                                </div>
<!--
                                <div class="row">
                                    <div class="col-md-12 pad-adjust">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" id="datosTarjeta" checked class="text-muted"> Quieres guardar los datos de la tarjeta?
                                            </label>
                                        </div>
                                    </div>
                                </div>
-->
                                <div class="row ">
                                    <div class="col-md-6 col-sm-6 col-xs-6 pad-adjust">
                                        <a href="{{url('carrito')}}"> <span id="cancelarPago" class="btn btn-danger">CANCELAR</span></a>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6 pad-adjust">

                                      <span id="aceptarPago" class="btn btn-warning btn-block">PAGAR YA!</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-4 text-center">
                    <img src="{{asset('img/tarjeta2.png')}}" id="tarjeta" alt="tarjeta">
                </div>
            </div>
        </div>
@stop