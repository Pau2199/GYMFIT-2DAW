<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" href="{{asset('css/estiloCrud.css')}}" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </head>
    <body>
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
                                <th scope="col">Direccion</th>
                                <th scope="col" class="text-dark">borr</th>
                            </tr>
                        </thead>
                        <tbody>
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
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>