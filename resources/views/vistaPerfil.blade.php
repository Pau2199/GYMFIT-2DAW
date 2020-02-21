@extends('layouts.master')
@section('titulo')
<title>Perfil del Usuario</title>
@stop
@section('css')
<link rel="stylesheet" href="{{asset('css/estiloPerfil.css')}}" type="text/css">
@stop
@section('js')
<script src="{{asset('js/vistaPerfil.js')}}"></script>
@stop
@section('content')
<div class="container-fluid">
    <h1 class="text-center">Perfil</h1>
    <div class="row justify-content-center">
        <div class="col-lg-7 col-md-8 col-sm-12 col-12 m-4 borde p-4">
            <form action="">

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="nombre" class="font-weight-bold">Nombre</label>
                        <input type="text" class="form-control readonly" name="name" id="nombrePerfil" readonly="readonly">
                    </div>
                    <div class="form-group col-md-8">
                        <label for="apellidos" class="font-weight-bold">Apellidos</label>
                        <input type="text" class="form-control readonly" name="apellidos" id="apellidosPerfil" readonly>
                    </div>
                </div>     
                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label for="correo" class="font-weight-bold">Correo Electronico</label>
                        <input type="email" class="form-control readonly" name="email" id="correoPerfil" readonly>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="fechNac" class="font-weight-bold">Fecha de Nacimiento</label>
                        <input type="date" class="form-control readonly" name="fechNac" id="fechPerfil" readonly>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="via" class="font-weight-bold">Via</label>
                        <input type="text" class="form-control readonly" name="via" id="type_way" readonly>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="fechNac" class="font-weight-bold">Nombre de la Via</label>
                        <input type="text" class="form-control readonly" name="nombreVia" id="name" readonly>
                    </div>
                </div>
                <div class="form-row justify-content-between">
                    <div class="form-group col-md-3">
                        <label for="numero" class="font-weight-bold">Numero</label>
                        <input type="text" class="form-control readonly" name="numero" id="number" readonly>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="puerta" class="font-weight-bold">Puerta</label>
                        <input type="text" class="form-control readonly" name="puerta" id="door" readonly>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="piso" class="font-weight-bold">Piso</label>
                        <input type="text" class="form-control readonly" name="piso" id="floo" readonly>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-5">
                        <label for="provincia" class="font-weight-bold">Provincia</label>
                        <input type="text" class="form-control readonly" name="provincia" id="country" readonly>
                    </div>
                    <div class="form-group col-md-5">
                        <label for="localidad" class="font-weight-bold">Localidad</label>
                        <input type="text" class="form-control readonly" name="localidad" id="location" readonly>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="cpostal" class="font-weight-bold">C.P</label>
                        <input type="text" class="form-control readonly" name="codigoPostal" id="postal_code" readonly>
                    </div>
                </div> 
                <div class="form-row justify-content-center ">
                    <div class="text-center mx-2">
                        <span id="modificarDatos" class="btn btn-primary" name="modificar">Modificar datos</span>
                    </div>                        
                    <div class="text-center mx-2 ">
                        <span id="guardarDatos" class="btn btn-success" name="guardar">Guardar datos</span>
                    </div>     
                    <div class="text-center mx-2 ">
                        <a href="{{ url('/')}}" ><span id="eliminarUsuario" class="btn btn-danger" name="eliminar">Eliminar Cuenta</span></a>
                    </div>                    
                    <div class="text-center mx-2 ">
                        <a href="{{ route('logout') }}" ><span id="cerrarSesion" class="btn btn-danger" name="cerrarSesion">Logout</span></a>
                    </div>   
                </div>
            </form>
        </div>


    </div>
    <h1 class="text-center mt-4">Historial de Pedidos</h1>
    <div class="row justify-content-center padre">
    
    </div>
</div>
@stop