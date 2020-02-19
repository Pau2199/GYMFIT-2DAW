@extends('layouts.master')
@section('titulo')
<title>Lista Productos</title>
@stop
@section('css')
<link rel="stylesheet" href="{{asset('css/estiloCrud.css')}}" type="text/css">
@stop
@section('js')
<script src="{{asset('js/crudProductos.js')}}"></script>
@stop
@section('content')
<div class="container-fluid">
    <h1 class="m-5 text-center p-3">Lista de Productos</h1>
    <div class="row justify-content-around text-center m-5">
        <div class="col-md-8 col-sm-12 my-3">
            <form action="">
                <div class="form-group">
                    <label for="categoria">Categoria</label>
                    <select class="form-control" id="categoria">
                        <option value="">Seleccione una categoria...</option>
                        <option value="ropa">Ropa</option>
                        <option value="accesorios">Accesorios</option>
                        <option value="maquinas">Maquinas</option>
                    </select>
                </div> 
                <div class="form-group" id="subCategoriaDiv">
                    <label for="subcategoria">Subcategoria</label>
                    <select class="form-control" id="subcategoria">
                        <option value="">Seleccione una subcategoria</option>
                        <option value="camisetas">Camisetas</option>
                        <option value="sudaderas">Sudaderas</option>
                        <option value="tops">Tops</option>
                        <option value="pantalones">Pantalones</option>
                        <option value="calzado">Calzado</option>
                    </select>
                </div>
                <div class="form-inline my-5">
                    <input class="form-control mr-sm-2" type="text" id="buscarProducto" placeholder="Buscar producto" aria-label="Buscar">
                    <button class="btn btn-outline-success ml-sm-3" type="submit">Buscar</button>
                </div>
            </form>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col" class="text-dark">ver</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Precio</th>
                        <th scope="col">IVA</th>
                        <th scope="col">Descuento</th>
                        <th scope="col">Peso</th>
                        <th scope="col">Categoria</th>
                        <th scope="col" class="text-dark">borr</th>
                    </tr>
                </thead>
                <tbody id="agregarElemento">
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop