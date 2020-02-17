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
        <div class="container-fluid my-3">
            <div class="row">
                <div class="col-md-5 ml-5 my-3">
                    <div id="carouselImagenes" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselImagenes" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselImagenes" data-slide-to="1"></li>
                            <li data-target="#carouselImagenes" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block d-none imagenVistaProducto" src="{{asset('img/productos/rojo.jpg')}}" alt="Primera Imagen">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block d-none imagenVistaProducto" src="{{asset('img/productos/verde.jpg')}}" alt="Segunda Imagen">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block imagenVistaProducto" src="{{asset('img/productos/violeta.png')}}" alt="Tercera Imagen">
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
                <div class="col-md-4 my-3">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>PANTALONES NEGROS</h2>
                            <p class="colorTexto">Pantalones comodos de color Negro</p>
                            <p class="mt-5 font-weight-bold precio">10.99€</p>
                            <hr class="lineaPrecio">
                            <form action="#">
                                <p>Elige la Talla:</p>
                                <div class="row">
                                    <div class="col-md-12 ml-5 my-3">
                                        <div class="row">
                                            <div class="2 mr-5">
                                                <button class="btn btn-outline-info">XS</button>
                                            </div>
                                            <div class="2 mr-5">
                                                <button class="btn btn-outline-info">S</button>
                                            </div>
                                            <div class="2 mr-5">
                                                <button class="btn btn-outline-info">M</button>
                                            </div>
                                            <div class="2 mr-5">
                                                <button class="btn btn-outline-info">L</button>
                                            </div>
                                            <div class="2 mr-5">
                                                <button class="btn btn-outline-info">XL</button>
                                            </div>
                                            <div class="2">
                                                <button class="btn btn-outline-info">XXL</button>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-5">Elige cuantos quieres:</p>
                                <div class="row">
                                    <div class="col-md-12 ml-5">
                                        <div class="row justify-content-center">
                                            <div class="col-md-2">
                                                <button class="text-center boton btn btn-secondary w-100">+</button>  
                                            </div>
                                            <div class="col-md-2 mt-1 text-center">
                                                <span>0</span>
                                            </div>
                                            <div class="col-md-2">
                                                <button class="text-center boton btn btn-secondary w-100">-</button>
                                            </div>
                                        </div>
                                        <div class="row my-5 justify-content-center">
                                            <div class="col-md-4">
                                                <button class="btn btn-info">Añadir al Carrito</button>
                                            </div>
                                        </div>  
                                    </div>
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