<!DOCTYPE html>
<html>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>@yield('title')</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

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
        <div id="banner">
                <div class="container-fluid">
                </div>
        </div><!-- Zone -->
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-sm-12 col-12 main-section">
            <div class="dropdown">
                <button type="button" class="btn btn-info" data-toggle="dropdown">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                </button>
                <div class="dropdown-menu">
                    <div class="row total-header-section">
                        <div class="col-lg-6 col-sm-6 col-6">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                        </div>

                        <?php $total = 0 ?>
                        @foreach((array) session('cart') as $id => $details)
                            <?php $total += $details['price'] * $details['quantity'] ?>
                        @endforeach

                        <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
                            <p>Total: <span class="text-info">$ {{ $total }}</span></p>
                        </div>
                    </div>

                    @if(session('cart'))
                        @foreach(session('cart') as $id => $details)
                            <div class="row cart-detail">
                                <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                    <img src="{{ $details['photo'] }}" />
                                </div>
                                <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                    <p>{{ $details['name'] }}</p>
                                    <span class="price text-info"> ${{ $details['price'] }}</span> <span class="count"> Quantity:{{ $details['quantity'] }}</span>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                            <a href="{{ url('cart') }}" class="btn btn-primary btn-block">View all</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container page">
    @yield('content')
</div>
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
@yield('scripts')

</body>
</html>