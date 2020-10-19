<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Viajeros</title>
    <!--Código usado para el favicon-->
    <link rel="icon" href="img/favicon.ico" sizes="32x32" type="image/png">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <br><br>
    <div class="bg-success">
        <!--Código para el carrusel de fotos-->
        <div id="carousel-2" class="carousel slide carousel-fade" data-ride="carousel">
            <!--Indicadores-->
            <ol class="carousel-indicators">
                <li data-target="#carousel-2" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-2" data-slide-to="1"></li>
                <li data-target="#carousel-2" data-slide-to="2"></li>
                <li data-target="#carousel-2" data-slide-to="3"></li>
                <li data-target="#carousel-2" data-slide-to="4"></li>
            </ol>
            <!--Deslizamientos-->
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div class="view">
                        <img class="d-block w-100" class="img-fluid" src="{{ asset('img/foto1.jpg') }}" width="1520" height="723px" alt="First slide">
                        <div class="mask rgba-black-strong"></div>
                    </div>
                    <div class="carousel-caption">
                        <h3 class="h3-responsive">Viajeros</h3>
                        <p>América</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="view">
                        <img class="d-block w-100" class="img-fluid" src="{{ asset('img/foto3.jpg') }}" width="1520" height="723px" alt="Second slide">
                        <div class="mask rgba-black-slight"></div>
                    </div>
                    <div class="carousel-caption">
                        <h3 class="h3-responsive">Viajeros</h3>
                        <p>Europa</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="view">
                        <img class="d-block w-100" class="img-responsive" src="{{ asset('img/foto2.jpg') }}" width="1520px" height="723px" alt="Third slide">
                        <div class="mask rgba-black-slight"></div>
                    </div>
                    <div class="carousel-caption">
                        <h3 class="h3-responsive">Viajeros</h3>
                        <p>África</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="view">
                        <img class="d-block w-100" class="img-responsive" src="{{ asset('img/foto4.jpg') }}" width="1520px" height="723px" alt="Second slide">
                        <div class="mask rgba-black-strong"></div>
                    </div>
                    <div class="carousel-caption">
                        <h3 class="h3-responsive">Viajeros</h3>
                        <p>Asia</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="view">
                        <img class="d-block w-100" class="img-responsive" src="{{ asset('img/foto5.jpg') }}" width="1520px" height="723 px" alt="Third slide">
                        <div class="mask rgba-black-slight"></div>
                    </div>
                    <div class="carousel-caption">
                        <h3 class="h3-responsive">Viajeros</h3>
                        <p>Oceania</p>
                    </div>
                </div>

                <!--Controles de movimiento del carrusel-->
                <a class="carousel-control-prev" href="#carousel-2" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-2" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <!-- Barra de navegación -->
            <nav class="navbar navbar-expand-lg navbar-light bg-success navbar-dark fixed-top">
                <!-- Brand -->
                <a class="navbar-brand" href="Tienda.html">Viajeros</a>
                <img src="img/favicon.ico" alt="logo" style="width:40px;">
                <!-- Botón de colapso de menú -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Links -->
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="Tienda.html">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="Conocenos.html">Conócenos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="incidencias.html">Incidencias</a>
                        </li>
                        <!-- Dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link text-white dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                Destinos
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="america.html">América</a>
                                <a class="dropdown-item" href="europa.html">Europa</a>
                                <a class="dropdown-item" href="africa.html">África</a>
                                <a class="dropdown-item" href="asia.html">Asia</a>
                                <a class="dropdown-item" href="oceania.html">Oceanía</a>
                                <a class="dropdown-item" href="todas.html">Todos</a>
                            </div>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0 text-dark bg-light" type="submit">Buscar</button>
                    </form>
                </div>
            </nav>
        </div>
        <br><br><br>
        <h1 class="display-1 text-center">VIAJEROS</h1>
        <br>
        <h1 class="text-center">La web de los amantes de la naturaleza y los viajes</h1>
        
        <br><br>
        <!-- Código para las cards -->
        <div class="container ">

            <div class="row">

                <div class="col-md-4 sm-4 lg-4">
                    <div class="card" style="width:300px">
                        <img class="card-img-top" src="img/foto1.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title text-center">América</h4>
                            <p class="card-text text-center">Disfruta de un viaje por Ámerica </p>
                            <a href="america.html" class="btn btn-success mx-auto d-block">Búscame un destino</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 sm-4 lg-4">
                    <div class="card" style="width:300px">
                        <img class="card-img-top" src="img/foto2.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title text-center">Africa</h4>
                            <p class="card-text text-center">Date un salto a conocer Africa</p>
                            <a href="europa.html" class="btn btn-success mx-auto d-block">Búscame un destino</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 sm-4 lg-4">
                    <div class="card" style="width:300px">
                        <img class="card-img-top" src="img/foto3.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title text-center">Europa</h4>
                            <p class="card-text text-center">Aventúrate a visitar Europa </p>
                            <a href="africa.html" class="btn btn-success mx-auto d-block">Búscame un destino</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br><br><br>

</body>

</html>