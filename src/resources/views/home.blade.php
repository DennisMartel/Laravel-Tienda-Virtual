@extends('layouts.app')
@section('title', 'Inicio')
@section('content')
    <!-- ========================= SECTION INTRO ========================= -->
    <div id="carousel-ecommerce" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            @foreach ($banners as $key => $banner)
                <li data-target="#carouselExampleIndicators" data-slide-to="{{ $key }}"
                    class="{{ $key == 0 ? 'active' : '' }}"></li>
            @endforeach
        </ol>
        <div class="carousel-inner">
            @foreach ($banners as $key => $banner)
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}" data-interval="300">
                    <img src="{{ $banner->imagen }}" class="d-block w-100" alt="{{ $banner->titulo }}" style="max-height: 400px;">
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carousel-ecommerce" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-ecommerce" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- ========================= SECTION INTRO END// ========================= -->

    <!-- ========================= SECTION CATEGORIES ========================= -->
    <section class="section-name bg padding-y-sm mt-3">
        <div class="container">
            <header class="section-heading">
                <h3 class="section-title font-weight-light text-center">Categorias Destacadas</h3>
            </header><!-- sect-heading -->
            <div class="row">
                @foreach($categorias as $key => $categoria)
                    <div class="col-6 col-sm-6 col-md 3 col-lg-2 col-xl-2">
                        <div class="circulo-categorias" style="width: 180px; height: 180px; overflow: hidden; border-radius: 50%;border: 2px solid #3167eb; ">
                            <a href="{{ url('categoria', ucwords(str_replace(" "," ",$categoria->titulo))) }}">
                                <img src="{{ $categoria->imagen }}" alt="{{ $categoria->titulo }}" style="width: 180px; height: 180px; object-fit: cover; text-align: center; display: block">
                            </a>
                        </div>
                        <p class="text-center font-weight-bold mt-2" style="font-size: 20px;">{{ $categoria->titulo }}</p>
                    </div>
                @endforeach
            </div> <!-- row.// -->
        </div><!-- container // -->
    </section>

    <!-- ========================= SECTION CATEGORIES END// ========================= -->

    <!-- ========================= SECTION FEATURE ========================= -->
    {{-- <section class="section-content padding-y-sm">
        <div class="container">
            <article class="card card-body">


                <div class="row">
                    <div class="col-md-4">
                        <figure class="item-feature">
                            <span class="text-primary"><i class="fa fa-2x fa-truck"></i></span>
                            <figcaption class="pt-3">
                                <h5 class="title">Fast delivery</h5>
                                <p>Dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore </p>
                            </figcaption>
                        </figure> <!-- iconbox // -->
                    </div><!-- col // -->
                    <div class="col-md-4">
                        <figure class="item-feature">
                            <span class="text-primary"><i class="fa fa-2x fa-landmark"></i></span>
                            <figcaption class="pt-3">
                                <h5 class="title">Creative Strategy</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                </p>
                            </figcaption>
                        </figure> <!-- iconbox // -->
                    </div><!-- col // -->
                    <div class="col-md-4">
                        <figure class="item-feature">
                            <span class="text-primary"><i class="fa fa-2x fa-lock"></i></span>
                            <figcaption class="pt-3">
                                <h5 class="title">High secured </h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                </p>
                            </figcaption>
                        </figure> <!-- iconbox // -->
                    </div> <!-- col // -->
                </div>
            </article>

        </div> <!-- container .//  -->
    </section> --}}
    <!-- ========================= SECTION FEATURE END// ========================= -->

    <!-- ========================= SECTION  ========================= -->
    <section class="section-name padding-y-sm">
        <div class="container">

            <header class="section-heading">
                <a href="#" class="btn btn-outline-primary float-right">See all</a>
                <h3 class="section-title font-weight-light text-center">Nuevos Productos</h3>
            </header><!-- sect-heading -->


            <div class="row">
                @foreach ($productos as $producto)
                    <div class="col-md-3">
                        <div href="#" class="card card-product-grid">
                            <a href="#" class="img-wrap"> 
                                <img src="{{ $producto->imagenUrl }}"> 
                            </a>
                            <span class="topbar">
                                <a href="#" class="float-right">
                                    <i class="fas fa-heart"></i>
                                </a>
                            </span>
                            <figcaption class="info-wrap">
                                <a href="#" class="title">{{ $producto->nombre }}</a>
                                <div class="price mt-1">${{ $producto->precio }}
                                    <a href="" class="btn btn-sm btn-outline-primary float-right">Añadir al carrito <i
                                            class="fas fa-bag"></i></a>
                                </div> <!-- price-wrap.// -->
                            </figcaption>
                        </div>
                    </div> <!-- col.// -->
                @endforeach
            </div> <!-- row.// -->

        </div><!-- container // -->
    </section>
    <!-- ========================= SECTION  END// ========================= -->

    <!-- ========================= SECTION  ========================= -->
    <section class="section-name bg padding-y-sm">
        <div class="container">
            <header class="section-heading">
                <h3 class="section-title font-weight-light text-center">Marcas Destacadas</h3>
            </header><!-- sect-heading -->

            <div class="row">
                @foreach($marcas as $marca)
                    <div class="col-md-2 col-6">
                        <figure class="box item-logo">
                            <a href="#">
                                <img src="{{ $marca->imagen }}">
                            </a>
                            <figcaption class="border-top pt-2">{{ $marca->titulo }}</figcaption>
                        </figure> <!-- item-logo.// -->
                    </div> <!-- col.// -->
                @endforeach
            </div> <!-- row.// -->
        </div><!-- container // -->
    </section>
    <!-- ========================= SECTION  END// ========================= -->

    <script>
        $('.carousel').carousel({
            interval: 5000
        })
    </script>
@endsection
