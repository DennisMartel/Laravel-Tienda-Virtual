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
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/Menu.css') }}" rel="stylesheet">
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
<header>
  <!-- contact content -->
  <div class="header-content-top">
    <div class="content">
      <span><i class="fas fa-phone"></i> (+503) 6178-4278</span>
      <span><i class="fas fa-envelope"></i>marteldennis05gmail.com</span>
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
      <input type="text" placeholder="What are you looking for?" class="input-search"/>
    </div>
    </label>
    <!-- // search -->
    <nav class="nav-content">
      <!-- nav -->
      <ul class="nav-content-list">
        <li class="nav-content-item account-login">
          <label class="open-menu-login-account" for="open-menu-login-account">

            <input class="input-menu" id="open-menu-login-account" type="checkbox" name="menu" />

            <i class="fas fa-user-circle"></i><!--<span class="login-text">Hello, Sign in <strong>-->Crear Cuenta</strong></span> <span class="item-arrow"></span>

            <!-- submenu -->
            <ul class="login-list">
              <li class="login-list-item"><a href="">My account</a></li>
              <li class="login-list-item"><a href="">Create account</a></li>
              <li class="login-list-item"><a href="">logout</a></li>
              </label>
            </ul>
        </li>
        <li class="nav-content-item"><a class="nav-content-link" href="https://www.cupcom.com.br/"><i class="fas fa-heart"></i></a></li>
        <li class="nav-content-item"><a class="nav-content-link" href="https://www.cupcom.com.br/"><i class="fas fa-shopping-cart"></i></a></li>
        <!-- call to action -->
      </ul>
    </nav>
  </div>
  <!-- nav navigation commerce -->
  <div class="nav-container">
    <nav class="all-category-nav">
      <label class="open-menu-all" for="open-menu-all">
        <input class="input-menu-all" id="open-menu-all" type="checkbox" name="menu-open" />
        <span class="all-navigator"><i class="fas fa-bars"></i> <span>All category</span> <i class="fas fa-angle-down"></i>
          <i class="fas fa-angle-up"></i>
        </span>

        <ul class="all-category-list">
          <li class="all-category-list-item"><a href="https://www.cupcom.com.br/" class="all-category-list-link">Smartphones<i class="fas fa-angle-right"></i></a>
            <div class="category-second-list">
              <ul class="category-second-list-ul">
                <li class="category-second-item"><a href="https://www.cupcom.com.br/">Iphone 10</a></li>
                <li class="category-second-item"><a href="https://www.cupcom.com.br/">Galaxy Note 10</a></li>
                <li class="category-second-item"><a href="https://www.cupcom.com.br/">Motorola One </a></li>
                <li class="category-second-item"><a href="https://www.cupcom.com.br/">Galaxy A80 </a></li>
                <li class="category-second-item"><a href="https://www.cupcom.com.br/">Galaxy M </a></li>
                <li class="category-second-item"><a href="https://www.cupcom.com.br/">Huaway P30 </a></li>
              </ul>

              <div class="img-product-menu"><img src="https://i.ibb.co/Vvndkmy/banner.jpg"></div>
              </div>
          </li>
          <li class="all-category-list-item"><a href="https://www.cupcom.com.br/" class="all-category-list-link">Furniture <i class="fas fa-angle-right"></i></a></li>
          <li class="all-category-list-item"><a href="https://www.cupcom.com.br/" class="all-category-list-link">Toys<i class="fas fa-angle-right"></i></a></li>
          <li class="all-category-list-item"><a href="https://www.cupcom.com.br/" class="all-category-list-link">Computing<i class="fas fa-angle-right"></i></a></li>
          <li class="all-category-list-item"><a href="https://www.cupcom.com.br/" class="all-category-list-link">Games<i class="fas fa-angle-right"></i></a></li>
          <li class="all-category-list-item"><a href="" class="all-category-list-link">Automotive<i class="fas fa-angle-right"></i></a></li>

        </ul>
      </label>

    </nav>
    <nav class="featured-category">
      <ul class="nav-row">
        <li class="nav-row-list"><a href="https://www.cupcom.com.br/" class="nav-row-list-link">Smartphones</a></li>
        <li class="nav-row-list"><a href="https://www.cupcom.com.br/" class="nav-row-list-link">furniture</a></li>
        <li class="nav-row-list"><a href="https://www.cupcom.com.br/" class="nav-row-list-link">Toys</a></li>
        <li class="nav-row-list"><a href="https://www.cupcom.com.br/" class="nav-row-list-link">Computing</a></li>
        <li class="nav-row-list"><a href="https://www.cupcom.com.br/" class="nav-row-list-link">Games</a></li>
        <li class="nav-row-list"><a href="https://www.cupcom.com.br/" class="nav-row-list-link">Automotive</a></li>
      </ul>
    </nav>
  </div>
</header>


</body>
</html>
