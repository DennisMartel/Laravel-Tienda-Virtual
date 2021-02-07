<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

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
<header style="position: fixed;">
  <!-- contact content -->
  <div class="header-content-top">
    <div class="content">
      <span>Envio gratis en compras mayores a $40.00. Recibe en 24 horas</span>
      {{-- <span><i class="fas fa-phone"></i> (+503) 6178-4278</span>
      <span><i class="fas fa-envelope"></i>marteldennis05gmail.com</span> --}}
    </div>
  </div>
  <!-- / contact content -->
  <div class="container">
    <!-- logo -->
    <strong class="logo"><i class="fas fa-heart"></i></strong>
    <!-- open nav mobile -->

    <!--search -->
    <label class="open-search" for="open-search">
      <i class="fas fa-search"></i>
            <input class="input-open-search" id="open-search" type="checkbox" name="menu" />
    <div class="search">
      <button class="button-search"><i class="fas fa-search"></i></button>
      <input type="text" placeholder="Buscar producto" class="input-search"/>
    </div>
    </label>
    <!-- // search -->
    <nav class="nav-content">
      <!-- nav -->
      <ul class="nav-content-list">
        <li class="nav-content-item account-login">
          <label class="open-menu-login-account" for="open-menu-login-account">

            <input class="input-menu" id="open-menu-login-account" type="checkbox" name="menu" />

            <i class="fas fa-user-circle"></i><!--<span class="login-text">Hello, Sign in <strong>--></strong></span> <span class="item-arrow"></span>

            <!-- submenu -->
            <ul class="login-list">
              @guest
                <li class="login-list-item"><a href="{{ url('login') }}" style="color: #555; font-weight: 700;">Identificate</a></li>
              @else
                <li class="login-list-item"><a href="" style="color: #555; font-weight: 700;">Hola {{ auth::user()->name }}</a></li>
                @can('administrador')
                <li class="login-list-item"><a href="{{ url('dashboard') }}" style="color: #555; font-weight: 700;">Administración</a></li>
                @endcan
                <li class="login-list-item">
                  <form action="{{ url('logout') }}" method="post" onsubmit="e.preventDefault()">
                    @csrf
                    <button type="submit" class="btn btn-danger btn-block w-100">Salir</button>
                  </form>
                  {{-- <a href="{{ url('logout') }}" style="color: #555; font-weight: 700;">Salir</a> --}}
                </li>
              @endguest
              </label>
            </ul>
        </li>
        <li class="nav-content-item"><a class="nav-content-link" href=""><i class="fas fa-heart"></i></a></li>
        <li class="nav-content-item"><a class="nav-content-link" href=""><i class="fas fa-shopping-cart"></i></a></li>
        <!-- call to action -->
      </ul>
    </nav>
  </div>
  <!-- nav navigation commerce -->
  <div class="nav-container">
    <nav class="all-category-nav">
      <label class="open-menu-all" for="open-menu-all">
        <input class="input-menu-all" id="open-menu-all" type="checkbox" name="menu-open" />
        <span class="all-navigator"><i class="fas fa-bars"></i> <span>Categorias Populares</span> <i class="fas fa-angle-down"></i>
          <i class="fas fa-angle-up"></i>
        </span>

        <ul class="all-category-list">
            @php
            $menuCategorias = DB::table('categorias')->where('status',0)->get();
            @endphp
            @foreach($menuCategorias as $menuCategoria)
                <li class="all-category-list-item"><a href="{{ url('allCategory', $menuCategoria->idCategoria) }}" class="all-category-list-link">{{ $menuCategoria->titulo }}<i class="far fa-circle"></i></a></li>
            @endforeach
        </ul>
      </label>

    </nav>
    <nav class="featured-category">
      <ul class="nav-row">
        @php
            $menus = DB::table('departamentos')->where('status', 0)->get();
        @endphp
        @foreach($menus as $menu)
            <li class="nav-row-list"><a href="{{ url('allDepartment', $menu->idDepartamento) }}" class="nav-row-list-link">{{ $menu->titulo }}</a></li>
        @endforeach        
      </ul>
    </nav>
  </div>
</header>

<div class="container-fluid my-5">
  @yield('content')
</div>

<footer class="footer-section">
  <div class="container-fluid">
      <div class="footer-cta pt-5 pb-5">
          <div class="row">
              <div class="col-xl-4 col-md-4 mb-30">
                  <div class="single-cta">
                      <i class="fas fa-map-marker-alt"></i>
                      <div class="cta-text">
                          <h4>Find us</h4>
                          <span>1010 Avenue, sw 54321, chandigarh</span>
                      </div>
                  </div>
              </div>
              <div class="col-xl-4 col-md-4 mb-30">
                  <div class="single-cta">
                      <i class="fas fa-phone"></i>
                      <div class="cta-text">
                          <h4>Call us</h4>
                          <span>9876543210 0</span>
                      </div>
                  </div>
              </div>
              <div class="col-xl-4 col-md-4 mb-30">
                  <div class="single-cta">
                      <i class="far fa-envelope-open"></i>
                      <div class="cta-text">
                          <h4>Mail us</h4>
                          <span>mail@info.com</span>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="footer-content pt-5 pb-5">
          <div class="row">
              <div class="col-xl-4 col-lg-4 mb-50">
                  <div class="footer-widget">
                      <div class="footer-logo">
                          <a href="index.html"><strong class="logo"><i class="fas fa-heart"></i></strong></a>
                      </div>
                      <div class="footer-text">
                          <p>Lorem ipsum dolor sit amet, consec tetur adipisicing elit, sed do eiusmod tempor incididuntut consec tetur adipisicing
                          elit,Lorem ipsum dolor sit amet.</p>
                      </div>
                      <div class="footer-social-icon">
                          <span>Follow us</span>
                          <a href="#"><i class="fab fa-facebook-f facebook-bg"></i></a>
                          <a href="#"><i class="fab fa-twitter twitter-bg"></i></a>
                          <a href="#"><i class="fab fa-google-plus-g google-bg"></i></a>
                      </div>
                  </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                  <div class="footer-widget">
                      <div class="footer-widget-heading">
                          <h3>Useful Links</h3>
                      </div>
                      <ul>
                          <li><a href="#">Home</a></li>
                          <li><a href="#">about</a></li>
                          <li><a href="#">services</a></li>
                          <li><a href="#">portfolio</a></li>
                          <li><a href="#">Contact</a></li>
                          <li><a href="#">About us</a></li>
                          <li><a href="#">Our Services</a></li>
                          <li><a href="#">Expert Team</a></li>
                          <li><a href="#">Contact us</a></li>
                          <li><a href="#">Latest News</a></li>
                      </ul>
                  </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                  <div class="footer-widget">
                      <div class="footer-widget-heading">
                          <h3>Subscribe</h3>
                      </div>
                      <div class="footer-text mb-25">
                          <p>Don’t miss to subscribe to our new feeds, kindly fill the form below.</p>
                      </div>
                      <div class="subscribe-form">
                          <form action="#">
                              <input type="text" placeholder="Email Address">
                              <button><i class="fab fa-telegram-plane"></i></button>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="copyright-area">
      <div class="container-fluid">
          <div class="row">
              <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                  <div class="copyright-text">
                      <p>Copyright &copy; 2018, All Right Reserved <a href="https://codepen.io/anupkumar92/">Anup</a></p>
                  </div>
              </div>
              <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                  <div class="footer-menu">
                      <ul>
                          <li><a href="#">Home</a></li>
                          <li><a href="#">Terms</a></li>
                          <li><a href="#">Privacy</a></li>
                          <li><a href="#">Policy</a></li>
                          <li><a href="#">Contact</a></li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>
</footer>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function () {

            $('.owl-carousel').owlCarousel({
                loop: true,
                autoplay: true,
                autoplayTimeout: 2000,
                autoplayHoverPause: true,
                items: 1
            });
        });
    </script>
</body>
</html>
