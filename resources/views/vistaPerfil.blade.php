<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{asset('css/estiloPerfil.css')}}" type="text/css">
    </head>
    <body>
        <div class="container-fluid">
            <h1 class="text-center">Perfil</h1>
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col-sm-12 col-12 my-4">
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="nombre" class="font-weight-bold">Nombre</label>
                            <input type="text" class="form-control" id="nombrePerfil">
                        </div>
                        <div class="form-group col-md-8">
                            <label for="apellidos" class="font-weight-bold">Apellidos</label>
                            <input type="text" class="form-control" id="apellidosPerfil">
                        </div>
                    </div>     
                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label for="correo" class="font-weight-bold">Correo Electronico</label>
                            <input type="email" class="form-control" id="correoPerfil">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="fechNac" class="font-weight-bold">Fecha de Nacimiento</label>
                            <input type="date" class="form-control" id="fechPerfil">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="direccion" class="font-weight-bold">Dirección</label>
                        <input type="text" class="form-control" id="direccionPerfil" >
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-5">
                            <label for="provincia" class="font-weight-bold">Provincia</label>
                            <input type="text" class="form-control" id="provinciaPerfil">
                        </div>
                        <div class="form-group col-md-5">
                            <label for="localidad" class="font-weight-bold">Localidad</label>
                            <input type="text" class="form-control" id="localidadPerfil">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="cpostal" class="font-weight-bold">Codigo Postal</label>
                            <input type="text" class="form-control" id="cpostalPerfil">
                        </div>
                    </div>
                </div>


            </div>
            <h1 class="text-center">Historial de Pedidos</h1>
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col-sm-12 col-12 my-4">

                </div>
            </div>
        </div>
    </body>
</html>