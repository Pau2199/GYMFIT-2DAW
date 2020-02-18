<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <script
                src="https://code.jquery.com/jquery-3.4.1.js"
                integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
                crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="{{asset('css/estiloPerfil.css')}}" type="text/css">
        <script src="{{asset('js/vistaPerfil.js')}}"></script>
    </head>
    <body>
        <div class="container-fluid">
            <h1 class="text-center">Perfil</h1>
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col-sm-12 col-12 m-4 borde p-4">
                    <form action="">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="nombre" class="font-weight-bold">Nombre</label>
                                <input type="text" class="form-control" id="nombrePerfil" readonly>
                            </div>
                            <div class="form-group col-md-8">
                                <label for="apellidos" class="font-weight-bold">Apellidos</label>
                                <input type="text" class="form-control" id="apellidosPerfil" readonly>
                            </div>
                        </div>     
                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label for="correo" class="font-weight-bold">Correo Electronico</label>
                                <input type="email" class="form-control" id="correoPerfil" readonly>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="fechNac" class="font-weight-bold">Fecha de Nacimiento</label>
                                <input type="date" class="form-control" id="fechPerfil" readonly>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="via" class="font-weight-bold">Via</label>
                                <input type="text" class="form-control" id="viaPerfil" readonly>
                            </div>
                            <div class="form-group col-md-8">
                                <label for="fechNac" class="font-weight-bold">Nombre de la Via</label>
                                <input type="text" class="form-control" id="nomViaPerfil" readonly>
                            </div>
                        </div>
                        <div class="form-row justify-content-between">
                            <div class="form-group col-md-3">
                                <label for="numero" class="font-weight-bold">Numero</label>
                                <input type="text" class="form-control" id="numeroPerfil" readonly>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="puerta" class="font-weight-bold">Puerta</label>
                                <input type="text" class="form-control" id="puertaPerfil" readonly>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="piso" class="font-weight-bold">Piso</label>
                                <input type="text" class="form-control" id="pisoPerfil" readonly>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-5">
                                <label for="provincia" class="font-weight-bold">Provincia</label>
                                <input type="text" class="form-control" id="provinciaPerfil" readonly>
                            </div>
                            <div class="form-group col-md-5">
                                <label for="localidad" class="font-weight-bold">Localidad</label>
                                <input type="text" class="form-control" id="localidadPerfil" readonly>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="cpostal" class="font-weight-bold">C.P</label>
                                <input type="text" class="form-control" id="cpostalPerfil" readonly>
                            </div>
                        </div> 
                        <div class="form-row justify-content-center ">
                            <div class="text-center mx-2">
                                <button type="submit" class="btn btn-primary">Modificar datos</button>
                            </div>                        
                            <div class="text-center mx-2 ">
                                <button type="submit" class="btn btn-success d-none">Guardar datos</button>
                            </div>
                        </div>

                    </form>
                </div>


            </div>
            <h1 class="text-center mt-4">Historial de Pedidos</h1>
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col-sm-12 col-12 my-4 p-4 borde">
                    <div class="form-row justify-content-between">
                        <div class="form-group col-md-4">
                            <label for="idPedido" class="font-weight-bold">Id del Pedido</label>
                            <input type="text" class="form-control" id="idPedido" readonly>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="fechaPedido" class="font-weight-bold">Fecha del Pedido</label>
                            <input type="date" class="form-control" id="fechaPedido" readonly>
                        </div>
                    </div> 
                    <div class="form-row justify-content-between">
                        <div class="form-group col-md-4">
                            <label for="metodoPedido" class="font-weight-bold">Metodo de Pago</label>
                            <input type="text" class="form-control" id="metodoPedido" readonly>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="precioPedido" class="font-weight-bold">Precio Total</label>
                            <input type="text" class="form-control" id="precioPedido" readonly>
                        </div>
                    </div> 

                </div>
            </div>
        </div>
    </body>
</html>