<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>GYMFIT</title>
        <link rel="stylesheet" href="{{asset('css/estiloCrud.css')}}" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </head>
    <body>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 mt-5">
                    <form action="#" class="credit-card-div">
                        <div class="panel panel-default" >
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" id="numTarjeta" placeholder="Escriba Numero Tarjeta" />
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                        <span class="help-block text-muted small-font" > Mes Expira</span>
                                        <input type="text" class="form-control" id="mesExpira" placeholder="MM" />
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                        <span class="help-block text-muted small-font" >  Año Expira</span>
                                        <input type="text" class="form-control" id="anyoExpira" placeholder="YY" />
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                        <span class="help-block text-muted small-font" >  CCV</span>
                                        <input type="text" class="form-control" id="cvv" placeholder="CCV" />
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-12 pad-adjust">

                                        <input type="text" class="form-control" id="dueñoTarjeta" placeholder="Nombre del propietario" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 pad-adjust">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" id="datosTarjeta" checked class="text-muted"> Quieres guardar los datos de la tarjeta?
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-6 col-sm-6 col-xs-6 pad-adjust">
                                        <input type="submit"  id="cancelarPago" class="btn btn-danger" value="CANCELAR" />
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6 pad-adjust">
                                        <input type="submit" id="aceptarPago" class="btn btn-warning btn-block" value="PAGAR YA" />
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

    </body>
</html>