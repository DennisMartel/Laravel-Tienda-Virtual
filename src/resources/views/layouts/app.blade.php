<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="pragma" content="no-cache" />
    <meta http-equiv="cache-control" content="max-age=604800" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Tienda Virtual | @yield('title')</title>

    <link href="https://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/favicon.ico" rel="shortcut icon"
        type="image/x-icon">

    <!-- jQuery -->
    <script src="https://bootstrap-ecommerce.com/bootstrap-ecommerce-html/js/jquery-2.0.0.min.js"
        type="text/javascript"></script>

    <!-- Bootstrap4 files-->
    <script src="https://bootstrap-ecommerce.com/bootstrap-ecommerce-html/js/bootstrap.bundle.min.js"
        type="text/javascript"></script>
    <link href="https://bootstrap-ecommerce.com/bootstrap-ecommerce-html/css/bootstrap.css" rel="stylesheet"
        type="text/css" />

    <!-- Font awesome 5 -->
    <link href="https://bootstrap-ecommerce.com/bootstrap-ecommerce-html/fonts/fontawesome/css/all.min.css"
        type="text/css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>

    <!-- custom style -->
    <link href="https://bootstrap-ecommerce.com/bootstrap-ecommerce-html/css/ui.css" rel="stylesheet" type="text/css" />
    <link href="https://bootstrap-ecommerce.com/bootstrap-ecommerce-html/css/responsive.css" rel="stylesheet"
        media="only screen and (max-width: 1200px)" />

    <!-- custom javascript -->
    <script src="https://bootstrap-ecommerce.com/bootstrap-ecommerce-html/js/script.js" type="text/javascript"></script>

    <script type="text/javascript">
        /// some script

        // jquery ready start
        $(document).ready(function() {
            // jQuery code

        });
        // jquery end

    </script>

</head>

<body>


    <header class="section-header">

        <section class="header-main border-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-4">
                        <a href="" class="brand-wrap">
                            <img class="logo"
                                src="https://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/logo.png">
                        </a> <!-- brand-wrap.// -->
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <form action="#" class="search">
                            <div class="input-group w-100">
                                <input type="text" class="form-control" placeholder="Buscar productos">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form> <!-- search-wrap .end// -->
                    </div> <!-- col.// -->
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="widgets-wrap float-md-right">
                            <div class="widget-header  mr-3">
                                <a href="#" class="icon icon-sm rounded-circle border"><i
                                        class="fa fa-shopping-cart"></i></a>
                                <span class="badge badge-pill badge-danger notify">0</span>
                            </div>
                            <div class="widget-header icontext">
                                <a href="#" class="icon icon-sm rounded-circle border"><i class="fa fa-user"></i></a>
                                <div class="text">
                                    @guest
                                        <span class="text-muted">Bienvenido!</span>
                                        <div>
                                            <a href="{{ url('login') }}">Iniciar Sesión</a> |
                                            <a href="{{ url('register') }}"> Registrarme</a>
                                        </div>
                                    @else
                                        <span class="text-muted">Bienvenido!</span>
                                        <div>
                                            <a href="{{ url('login') }}">{{ Auth::user()->name }}</a> |
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar Sesión</a>
                                        </div>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    @endguest
                                </div>
                            </div>

                        </div> <!-- widgets-wrap.// -->
                    </div> <!-- col.// -->
                </div> <!-- row.// -->
            </div> <!-- container.// -->
        </section> <!-- header-main .// -->
    </header> <!-- section-header.// -->


    <nav class="navbar navbar-main navbar-expand-lg navbar-light border-bottom">
        <div class="container">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav"
                aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="main_nav">
                <ul class="navbar-nav">
                    @php
                        $departamentos = DB::table('departamentos')->where('status',0)->get();
                    @endphp
                    @foreach($departamentos as $departamento)
                        <li class="nav-item"><a class="nav-link" href="{{ url('d', ucwords(str_replace(" ","",$departamento->titulo))) }}">{{ $departamento->titulo }}</a></li>
                    @endforeach
                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"> More</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Foods and Drink</a>
                            <a class="dropdown-item" href="#">Home interior</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Category 1</a>
                            <a class="dropdown-item" href="#">Category 2</a>
                            <a class="dropdown-item" href="#">Category 3</a>
                        </div>
                    </li> --}}
                </ul>
            </div> <!-- collapse .// -->
        </div> <!-- container .// -->
    </nav>

    </header> <!-- section-header.// -->

    @yield('content')

    <!-- ========================= FOOTER ========================= -->
    <footer class="section-footer border-top">
        <div class="container">
            <section class="footer-top padding-y">
                <div class="row">
                    <aside class="col-md col-6">
                        <h6 class="title">Brands</h6>
                        <ul class="list-unstyled">
                            <li> <a href="#">Adidas</a></li>
                            <li> <a href="#">Puma</a></li>
                            <li> <a href="#">Reebok</a></li>
                            <li> <a href="#">Nike</a></li>
                        </ul>
                    </aside>
                    <aside class="col-md col-6">
                        <h6 class="title">Company</h6>
                        <ul class="list-unstyled">
                            <li> <a href="#">About us</a></li>
                            <li> <a href="#">Career</a></li>
                            <li> <a href="#">Find a store</a></li>
                            <li> <a href="#">Rules and terms</a></li>
                            <li> <a href="#">Sitemap</a></li>
                        </ul>
                    </aside>
                    <aside class="col-md col-6">
                        <h6 class="title">Help</h6>
                        <ul class="list-unstyled">
                            <li> <a href="#">Contact us</a></li>
                            <li> <a href="#">Money refund</a></li>
                            <li> <a href="#">Order status</a></li>
                            <li> <a href="#">Shipping info</a></li>
                            <li> <a href="#">Open dispute</a></li>
                        </ul>
                    </aside>
                    <aside class="col-md col-6">
                        <h6 class="title">Account</h6>
                        <ul class="list-unstyled">
                            <li> <a href="#"> User Login </a></li>
                            <li> <a href="#"> User register </a></li>
                            <li> <a href="#"> Account Setting </a></li>
                            <li> <a href="#"> My Orders </a></li>
                        </ul>
                    </aside>
                    <aside class="col-md">
                        <h6 class="title">Social</h6>
                        <ul class="list-unstyled">
                            <li><a href="#"> <i class="fab fa-facebook"></i> Facebook </a></li>
                            <li><a href="#"> <i class="fab fa-twitter"></i> Twitter </a></li>
                            <li><a href="#"> <i class="fab fa-instagram"></i> Instagram </a></li>
                            <li><a href="#"> <i class="fab fa-youtube"></i> Youtube </a></li>
                        </ul>
                    </aside>
                </div> <!-- row.// -->
            </section> <!-- footer-top.// -->

            <section class="footer-bottom border-top row">
                <div class="col-md-2">
                    <p class="text-muted"> &copy 2019 Company name </p>
                </div>
                <div class="col-md-8 text-md-center">
                    <span class="px-2">info@pixsellz.io</span>
                    <span class="px-2">+879-332-9375</span>
                    <span class="px-2">Street name 123, Avanue abc</span>
                </div>
                <div class="col-md-2 text-md-right text-muted">
                    <i class="fab fa-lg fa-cc-visa"></i>
                    <i class="fab fa-lg fa-cc-paypal"></i>
                    <i class="fab fa-lg fa-cc-mastercard"></i>
                </div>
            </section>
        </div><!-- //container -->
    </footer>
    <!-- ========================= FOOTER END // ========================= -->

</body>

</html>
