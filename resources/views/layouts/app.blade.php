<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Tienda Virtual') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/Menu.css') }}" rel="stylesheet">
    <link href="{{ asset('css/Home.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.0.2/css/boxicons.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Owl-Carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />
<style>

</style>
</head>
<body>
    {{-- <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div> --}}

    <div class="overlay"></div>

    <div class="utility-nav d-none d-md-block">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6">
            <p class="small"><i class="bx bx-envelope"></i> tiendavirtual@gmail.com | <i class="bx bx-phone"></i> +(503) 6178-4278
            </p>
          </div>
          <div class="col-12 col-md-6 text-right">
            <p class="small">Por compras mayores a $50.00 envio gratis</p>
          </div>
        </div>
      </div>
    </div>
    
    <nav class="navbar navbar-expand-md navbar-dark bg-dark main-menu" style="box-shadow:none">
      <div class="container-fluid">
        <button type="button" id="sidebarCollapse" class="btn btn-link d-block d-md-none">
            <i class="bx bx-menu icon-single" style="color: white"></i>
        </button>
        <a class="navbar-brand" href="#"><h4 class="font-weight-bold">TiendaVirtual</h4></a>
        <ul class="navbar-nav ml-auto d-block d-md-none">
          <li class="nav-item">
            <a class="btn btn-link" href="#"><i class="bx bxs-cart icon-single" style="color: white"></i> 
                <span class="badge badge-success">3</span>
            </a>
          </li>
        </ul>
        <div class="collapse navbar-collapse">
        <form class="form-inline my-2 my-lg-0 mx-auto">
            <input class="form-control" type="search" placeholder="Search for products..." aria-label="Search">
            <button class="btn btn-success my-2 my-sm-0 " type="submit"><i class="bx bx-search"></i></button>
        </form>
          <ul class="navbar-nav">
            <li class="nav-item">
                <a class="btn nav-link" href="#">
                    <i class="bx bxs-cart icon-single" style="color: white"></i>
                    <span class="badge badge-success">3</span>
                </a>
            </li>
            <li class="nav-item ml-md-3">
              <a class="btn btn-success" href="#"><i class="bx bxs-user-circle mr-1"></i>Identificate</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
    <nav class="navbar navbar-expand-md navbar-dark bg-dark sub-menu">
      <div class="container">
        <div class="collapse navbar-collapse" id="navbar">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">INICIO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">MODA</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">BEBÉS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">HOGAR</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">TECNOLOGÍA</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">JUGUETES</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Support</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Delivery Information</a>
                <a class="dropdown-item" href="#">Privacy Policy</a>
                <a class="dropdown-item" href="#">Terms & Conditions</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
    <div class="search-bar bg-dark d-block d-md-none">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <form class="form-inline mb-3 mx-auto">
              <input class="form-control" type="search" placeholder="Buscar productos" aria-label="Search">
              <button class="btn btn-success" type="submit"><i class="bx bx-search"></i></button>
            </form>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Sidebar -->
    <nav id="sidebar">
      <div class="sidebar-header">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-10 pl-0">
              <a class="btn btn-success" href="#"><i class="bx bxs-user-circle mr-1"></i>Iniciar Sesión</a>
            </div>
            <div class="col-2 text-left">
                <button type="button" id="sidebarCollapseX" class="btn btn-link">
                    <i class="bx bx-x icon-single" style="color: white"></i>
                </button>
            </div>
          </div>
        </div>
      </div>
    
      <ul class="list-unstyled components links">
        <li>
          <a href="#"><i class="bx bx-home mr-3"></i> Home</a>
        </li>
        <li>
          <a href="#"><i class="bx bx-carousel mr-3"></i> Products</a>
        </li>
        <li>
          <a href="#"><i class="bx bx-book-open mr-3"></i> Schools</a>
        </li>
        <li>
          <a href="#"><i class="bx bx-crown mr-3"></i> Publishers</a>
        </li>
        <li>
          <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="bx bx-help-circle mr-3"></i>
                        Support</a>
          <ul class="collapse list-unstyled" id="pageSubmenu">
            <li>
              <a href="#">Delivery Information</a>
            </li>
            <li>
              <a href="#">Privacy Policy</a>
            </li>
            <li>
              <a href="#">Terms & Conditions</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="#"><i class="bx bx-phone mr-3"></i> Contact</a>
        </li>
      </ul>
    
      <h6 class="text-uppercase mb-1">Categorias</h6>
      <ul class="list-unstyled components mb-3">
        <li><a href="#">Category 1</a></li>
        <li><a href="#">Category 1</a></li>
        <li><a href="#">Category 1</a></li>
        <li><a href="#">Category 1</a></li>
        <li><a href="#">Category 1</a></li>
        <li><a href="#">Category 1</a></li>
      </ul>
    
      <ul class="social-icons">
        <li><a href="#" target="_blank" title=""><i class="bx bxl-facebook-square"></i></a></li>
        <li><a href="#" target="_blank" title=""><i class="bx bxl-twitter"></i></a></li>
        <li><a href="#" target="_blank" title=""><i class="bx bxl-linkedin"></i></a></li>
        <li><a href="#" target="_blank" title=""><i class="bx bxl-instagram"></i></a></li>
      </ul>
    
    </nav>
<div class="container-fluid my-2">
  @yield('content')
</div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="{{ asset('js/Menu.js') }}"></script>
</body>
</html>
