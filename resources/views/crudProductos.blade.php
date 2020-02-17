<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Document</title>
        <script
                src="https://code.jquery.com/jquery-3.4.1.js"
                integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
                crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{asset('css/estiloCrud.css')}}" type="text/css">
        <script src="{{asset('js/crudProductos.js')}}"></script>
    </head>
    <body>
        <div class="container-fluid">
            <h1 class="m-5 text-center p-3">Lista de Productos</h1>
            <div class="row justify-content-around text-center m-5">

                <div class="col-md-8 col-sm-12 my-3">
                    <form action="">
                        <div class="form-group">
                            <label for="categoria">Categoria</label>
                            <select class="form-control" id="categoria">
                                <option>Seleccione una categoria...</option>
                                <option>Ropa</option>
                                <option>Accesorios</option>
                                <option>Maquinas</option>
                            </select>
                        </div> 
                        <div class="form-group" id="subCategoriaDiv">
                            <label for="subcategoria">Subcategoria</label>
                            <select class="form-control" id="subcategoria">
                                <option>Seleccione una subcategoria</option>
                                <option>Camisetas</option>
                                <option>Sudaderas</option>
                                <option>Tops</option>
                                <option>Pantalones</option>
                                <option>Calzado</option>
                            </select>
                        </div>
                        <div class="form-inline my-5">
                            <input class="form-control mr-sm-2" type="text" id="buscarProducto" placeholder="Buscar producto" aria-label="Buscar">
                            <button class="btn btn-outline-success ml-sm-3" type="submit" id="buscarProducto">Buscar</button>
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
                                <th scope="col">Descuento</th>
                                <th scope="col">Categoria</th>
                                <th scope="col">Subcategoria</th>
                                <th scope="col" class="text-dark">borr</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img src="{{asset('img/lupa.svg')}}" alt=""></td>
                                <td>Pantalones Leggins</td>
                                <td>Nike</td>
                                <td>Pantalones Leggins fabricados en china con particulas de carbono y de color azul</td>
                                <td>29,99€</td>
                                <td>0%</td>
                                <td>Ropa</td>
                                <td>Pantalones</td>
                                <td><img src="{{asset('img/trash.svg')}}" alt="papelera"></td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('img/lupa.svg')}}" alt=""></td>
                                <td>Pantalones Leggins</td>
                                <td>Nike</td>
                                <td>Pantalones Leggins fabricados en china con particulas de carbono y de color azul</td>
                                <td>29,99€</td>
                                <td>0%</td>
                                <td>Ropa</td>
                                <td>Pantalones</td>
                                <td><img src="{{asset('img/trash.svg')}}" alt="papelera"></td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('img/lupa.svg')}}" alt=""></td>
                                <td>Pantalones Leggins</td>
                                <td>Nike</td>
                                <td>Pantalones Leggins fabricados en china con particulas de carbono y de color azul</td>
                                <td>29,99€</td>
                                <td>0%</td>
                                <td>Ropa</td>
                                <td>Pantalones</td>
                                <td><img src="{{asset('img/trash.svg')}}" alt="papelera"></td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('img/lupa.svg')}}" alt=""></td>
                                <td>Pantalones Leggins</td>
                                <td>Nike</td>
                                <td>Pantalones Leggins fabricados en china con particulas de carbono y de color azul</td>
                                <td>29,99€</td>
                                <td>0%</td>
                                <td>Ropa</td>
                                <td>Pantalones</td>
                                <td><img src="{{asset('img/trash.svg')}}" alt="papelera"></td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('img/lupa.svg')}}" alt=""></td>
                                <td>Pantalones Leggins</td>
                                <td>Nike</td>
                                <td>Pantalones Leggins fabricados en china con particulas de carbono y de color azul</td>
                                <td>29,99€</td>
                                <td>0%</td>
                                <td>Ropa</td>
                                <td>Pantalones</td>
                                <td><img src="{{asset('img/trash.svg')}}" alt="papelera"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>