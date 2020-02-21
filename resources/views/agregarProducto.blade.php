@extends('layouts.master')
@section('css')
<link rel="stylesheet" href="{{asset('css/estiloAgregarProducto.css')}}" type="text/css">
@stop
@section('js')
<script src="{{asset('js/agregarProducto.js')}}"></script>
@stop
@section('content')
<div class="container">
    <div class="row p-5 justify-content-center">
        <div class="col-sm-12 col-md-8">
            <form action="agregarProducto" enctype="multipart/form-data" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="nombre" class="font-weight-bold">Nombre Producto</label>
                    <input type="text" name="name" class="form-control" required placeholder="Escriba el nombre del producto aqui...">
                    <!--                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                </div>                        
                <div class="form-group">
                    <label for="marca" class="font-weight-bold">Marca del Producto</label>
                    <input type="text" name="brand" class="form-control" required placeholder="Escriba la marca del producto aqui...">
                </div>
                <div class="form-group">
                    <label for="descripcion" class="font-weight-bold">Descripción del Producto</label>
                    <textarea class="form-control" name="description" rows="3" required placeholder="Escriba la descripcion del producto aqui...">asasasasa</textarea>
                </div>

                <div class="form-group">
                    <label for="precio" class="font-weight-bold">Precio del Producto</label>
                    <input type="number" name="price" class="form-control" required min="1" placeholder="Escriba el precio del producto aqui...">
                </div>                
                <div class="form-group">
                    <label for="peso" class="font-weight-bold">Peso del Producto</label>
                    <input type="number" name="peso" class="form-control" required min="1" placeholder="Escriba el peso del producto aqui...">
                </div>
                <div class="form-group">
                    <label for="stock" class="font-weight-bold">Stock Disponible del Producto</label>
                    <input type="number" name="stock" class="form-control" required min="0" placeholder="Escriba el stock disponible...">
                </div>       
                <div class="form-group">
                    <label for="descuento" class="font-weight-bold">Descuento del Producto</label>
                    <select name="discount" class="form-control">
                        <option>0</option>
                        <option>5</option>
                        <option>10</option>
                        <option>15</option>
                        <option>20</option>
                        <option>25</option>
                        <option>30</option>
                        <option>35</option>
                        <option>40</option>
                        <option>45</option>
                        <option>50</option>
                        <option>55</option>
                        <option>60</option>
                        <option>65</option>
                        <option>70</option>
                        <option>75</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="categoria" class="font-weight-bold">Categoria del Producto</label>
                    <select id="category" name="category" class="form-control">
                        <option value="">Selecciona una categoria</option>
                        <option>Ropa</option>
                        <option>Material</option>
                        <option>Accesorios</option>
                    </select>
                </div>
                <div class="form-group" id="subCategory">
                    <label for="subcategoria" class="font-weight-bold">Subcategoria del Producto</label>
                    <select name="subCategory" class="form-control">
                        <option>Selecciona una subcategoria</option>
                        <option>Camisetas</option>
                        <option>Sudaderas</option>
                        <option>Tops</option>
                        <option>Pantalones</option>
                        <option>Zapatillas</option>
                    </select>
                </div>
                <div class="form-group" id="talla">
                    <label for="talla" class="font-weight-bold">Talla del Producto</label>
                    <select name="talla" class="form-control">
                        <option>Selecciona una talla</option>
                        <option>XS</option>
                        <option>S</option>
                        <option>M</option>
                        <option>L</option>
                        <option>XL</option>
                        <option>XXL</option>
                    </select>
                </div>
                <div class="form-group" id="color">
                    <label for="color" class="font-weight-bold">Color del Producto</label>
                    <input type="text" name="color" class="form-control" required placeholder="Escribe el color aqui...">
                </div>
                <input type="file" name="file[]" multiple="">
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>

        </div>

    </div>

</div>
@stop