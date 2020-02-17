<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" href="{{asset('css/esitloVistaProducto.css')}}" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container-fluid my-4">
            <div class="row">
                <div class=" col-lg-7 col-md-12 col-sm-12 col-12 justify-content-center">
                    <div id="carouselImagenes" class="carousel slide justify-content-center" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselImagenes" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselImagenes" data-slide-to="1"></li>
                            <li data-target="#carouselImagenes" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active text-center">
                                <img class="img-fluid text-center" src="{{asset('img/productos/pantalon2.jpg')}}" alt="Primera Imagen">
                            </div>
                            <div class="carousel-item text-center">
                                <img class="img-fluid" src="{{asset('img/productos/pantalon2.jpg')}}" alt="Segunda Imagen">
                            </div>
                            <div class="carousel-item text-center">
                                <img class="img-fluid" src="{{asset('img/productos/pantalon2.jpg')}}" alt="Tercera Imagen">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselImagenes" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </a>
                        <a class="carousel-control-next" href="#carouselImagenes" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12 col-12 my-3 justify-content-center">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 justify-content-center">
                            <h2>PANTALONES NEGROS</h2>
                            <p class="text-secondary">Pantalones comodos de color Negro</p>
                            <h1 class="mt-5 font-weight-bold precio">10.99€</h1>
                            <hr>
                            <form action="#">
                                <p>Elige la Talla:</p>
                                <div class="row my-3">
                                    <div class="col-12 m-1 ">
                                        <div class="row justify-content-center">
                                            <div class="m-2">
                                                <button class="btn btn-outline-info">XS</button>
                                            </div>
                                            <div class="m-2">
                                                <button class="btn btn-outline-info">S</button>
                                            </div>
                                            <div class="m-2">
                                                <button class="btn btn-outline-info">M</button>
                                            </div>
                                            <div class="m-2">
                                                <button class="btn btn-outline-info">L</button>
                                            </div>
                                            <div class="m-2">
                                                <button class="btn btn-outline-info">XL</button>
                                            </div>
                                            <div class="m-2">
                                                <button class="btn btn-outline-info">XXL</button>
                                            </div> 
                                        </div>
                                    </div>
                                </div> 
                                <p>Elige el color:</p>                               
                                <div class="row my-3">
                                    <div class="col-12 m-1 ">
                                        <div class="row justify-content-center">
                                            <div class="m-2">
                                                <button class="btn btn-outline-info">Rojo</button>
                                            </div>
                                            <div class="m-2">
                                                <button class="btn btn-outline-info">Azul</button>
                                            </div>
                                            <div class="m-2">
                                                <button class="btn btn-outline-info">Negro</button>
                                            </div>
                                            <div class="m-2">
                                                <button class="btn btn-outline-info">Amarilla</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-5">Elige cuantos quieres:</p>
                                <div class="row justify-content-center text-center mt-5">
                                    <div class="col-md-3 col-3">
                                        <button class="btn btn-secondary botonCantidad"><img src="{{asset('img/minus-solid.svg')}}" alt="plus"></button>  
                                    </div>
                                    <div class="col-md-1 col-1 col-sm-3 my-2">
                                        <span>1</span>
                                    </div>
                                    <div class="col-md-3 col-3 col-sm-3">
                                        <button class="btn btn-secondary botonCantidad"><img src="{{asset('img/plus-solid.svg')}}" alt="minus"></button>
                                    </div>
                                </div>

                                <div class="col-md-12 text-center mt-5">
                                    <button class="btn btn-info">Añadir al Carrito</button>
                                </div>


                            </form>
                        </div>
                    </div>
                </div>
                <div class="row mt-5 ml-5 mr-5">
                    <div class="col-md-6">
                        <span class="font-weight-bold text-uppercase">Descripción</span>
                        <hr class="lineaDescripcion">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    </div>
                    <div class="col-md-6">
                        <span class="font-weight-bold text-uppercase">Detalles</span>
                        <hr class="lineaDescripcion">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>