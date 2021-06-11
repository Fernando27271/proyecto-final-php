<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <title>GuasiPooh</title>
    </head>
    <body>
        <nav id="menu-area" class="navbar fixed-top navbar-expand-lg navbar-light">
            <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li id="logo" class="nav-item">
                    <a class="navbar-brand" href="#">GuasiPooh</a>
                </li>
                </ul>
                <ul id="header-nav" class="navbar-nav me-auto mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        MENU
                        </a>
                        <ul id="dropdown" class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="reservations.html">RESERVATIONS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="functions.html">FUNCTIONS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="news.html">NEWS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="contact.html">CONTACT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="galery.html">GALERY</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="mi-orden.html">MI ORDEN</a>
                </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-bell-fill"></i></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-envelope-fill"></i></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-person-fill"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-twitter"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-cart-fill"></i></a>
                    </li>
                </ul>
            </div>
            </div>
        </nav>
        <main class="container">
        @yield('main')
        </main>

        <footer id="main-footer">
        <div class="container">
            <div id="logof">
                <p><span id="logo-footer">GuasiPooh</span></p>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <p id="titlef">VISÍTANOS</p><br>
                    <p id="textf">Av. Conquistadores 489 San Isidro</p><br><br><br>
                </div>
                <div class="col-md-3">
                    <p id="titlef-1">ORDENES Y RESERVACIONES</p><br> 
                    <p id="textf-1">
                        <a id="textfa" href="#">Order Online<br><br> 
                        Make a Reservation</a>
                    </p><br><br><br>
                </div>  
                <div class="col-md-3">
                    <p id="titlef-2">HORARIO</p><br> 
                    <p id="textf-2">Mon – Sun <br><br>
                    11.30AM – 2.30PM <br><br>
                    5.30PM – 10PM
                    </p><br><br><br> 
                </div>  
                <div class="col-md-3">
                    <p id="titlef-3">CONTÁCTENOS</p><br> 
                    <p id="textf-3">
                    <a id="textfa-1" href="#">Facebook<br><br> 
                    Twitter<br><br>
                    Instagram</a>
                    </p><br><br><br> 
                </div> 
            </div>
        </div>
        </footer><!-- footer -->
        <script src="{{ asset('js/app.js') }}" ></script>
    </body>
</html>