@extends('layouts.master')
@section('css')
<link rel="stylesheet" href="{{asset('css/estiloAgregarProducto.css')}}" type="text/css">
@stop
@section('js')
<script src="{{asset('js/agregarProducto.js')}}"></script>
@stop
@section('content')
<div class="container-fluid">
    <h1 class="m-5 text-center p-1">Lista de Usuarios</h1>
    <div class="row justify-content-center text-center m-5">

        <div class="col-md-8 col-sm-12 my-1">
            <form action="">
                <div class="form-inline mb-5">
                    <input class="form-control mr-sm-2 w-75" type="text" placeholder="Buscar usuario" aria-label="Buscar">
                    <button class="btn btn-outline-success ml-sm-3" type="submit" id="buscarUsuario">Buscar</button>
                </div>
            </form>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col" class="text-dark">ver</th>
                        <th scope="col">NIF</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Primer apellido</th>
                        <th scope="col">Segundo apellido</th>
                        <th scope="col">Email</th>
                        <th scope="col">Contraseña</th>
                        <th scope="col">Rol</th>
                        <th scope="col" class="text-dark">borr</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($user as $valor)
                    <tr>
                        <td><img src="{{asset('img/lupa.svg')}}" alt="lupa"></td>
                        <th scope="row">{{$valor->nif}}</th>
                        <td>{{$valor->name}}</td>
                        <td>{{$valor->firts_surname}}</td>
                        <td>{{$valor->second_surname}}</td>
                        <td>{{$valor->email}}</td>
                        <td>**********</td>
                        <td>{{$valor->role}}</td>
                        <td><img src="{{asset('img/trash.svg')}}" alt="papelera"></td>
                    </tr>
                    @endforeach
                    <!--                    
<tr>
<td><img src="{{asset('img/lupa.svg')}}" alt="lupa"></td>
<th scope="row">03153747B</th>
<td>Alejandro</td>
<td>Salcedo</td>
<td>Santamaria</td>
<td>alejandrosal1396@gmail.com</td>
<td>**************</td>
<td>Admin</td>
<td>C/Montesa,55,30</td>
<td><img src="{{asset('img/trash.svg')}}" alt="papelera"></td>
</tr>  
<tr>
<td><img src="{{asset('img/lupa.svg')}}" alt="lupa"></td>
<th scope="row">03153747B</th>
<td>Alejandro</td>
<td>Salcedo</td>
<td>Santamaria</td>
<td>alejandrosal1396@gmail.com</td>
<td>**************</td>
<td>Admin</td>
<td>C/Montesa,55,30</td>
<td><img src="{{asset('img/trash.svg')}}" alt="papelera"></td>
</tr>  
<tr>
<td><img src="{{asset('img/lupa.svg')}}" alt="lupa"></td>
<th scope="row">03153747B</th>
<td>Alejandro</td>
<td>Salcedo</td>
<td>Santamaria</td>
<td>alejandrosal1396@gmail.com</td>
<td>**************</td>
<td>Admin</td>
<td>C/Montesa,55,30</td>
<td><img src="{{asset('img/trash.svg')}}" alt="papelera"></td>
</tr>  
<tr>
<td><img src="{{asset('img/lupa.svg')}}" alt="lupa"></td>
<th scope="row">03153747B</th>
<td>Alejandro</td>
<td>Salcedo</td>
<td>Santamaria</td>
<td>alejandrosal1396@gmail.com</td>
<td>**************</td>
<td>Admin</td>
<td>C/Montesa,55,30</td>
<td><img src="{{asset('img/trash.svg')}}" alt="papelera"></td>
</tr>  
<tr>
<td><img src="{{asset('img/lupa.svg')}}" alt="lupa"></td>
<th scope="row">03153747B</th>
<td>Alejandro</td>
<td>Salcedo</td>
<td>Santamaria</td>
<td>alejandrosal1396@gmail.com</td>
<td>**************</td>
<td>Admin</td>
<td>C/Montesa,55,30</td>
<td><img src="{{asset('img/trash.svg')}}" alt="papelera"></td>
</tr>
-->
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop