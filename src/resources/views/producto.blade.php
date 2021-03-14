@extends('layouts.app')

@section('title', 'producto')

@section('content')
    <!-- ============================ COMPONENT 3 ================================= -->
<div class="card my-3">
	<div class="row no-gutters">
		<aside class="col-sm-6">
<article class="gallery-wrap"> 
	<div class="img-big-wrap">
	   <a href="#"><img id="zoom-detalle-producto" src="http://localhost/ecommerce/src/storage/app/imagenesProducto/BlusadamaoldfasionNH7Yv64ckV.jpg" data-zoom-image="http://localhost/ecommerce/src/storage/app/imagenesProducto/BlusadamaoldfasionNH7Yv64ckV.jpg" class="img-fluid"></a>
	</div> <!-- img-big-wrap.// -->
	<div class="thumbs-wrap" id="galeria-detalle-producto">
	    <a href="#" class="item-thumb" data-image="http://localhost/ecommerce/src/storage/app/imagenesProducto/BlusadamaoldfasionNH7Yv64ckV.jpg" data-zoom-image="http://localhost/ecommerce/src/storage/app/imagenesProducto/BlusadamaoldfasionNH7Yv64ckV.jpg"> 
            <img src="http://localhost/ecommerce/src/storage/app/imagenesProducto/BlusadamaoldfasionNH7Yv64ckV.jpg">
        </a>
        <a href="#" class="item-thumb" data-image="http://localhost/ecommerce/src/storage/app/imagenesProducto/BlusadamaoldfasionH4IbydQm1f.jpg" data-zoom-image="http://localhost/ecommerce/src/storage/app/imagenesProducto/BlusadamaoldfasionH4IbydQm1f.jpg"> 
            <img src="http://localhost/ecommerce/src/storage/app/imagenesProducto/BlusadamaoldfasionH4IbydQm1f.jpg">
        </a>
        <a href="#" class="item-thumb" data-image="http://localhost/ecommerce/src/storage/app/imagenesProducto/BlusadamaoldfasionbMvrfCo8xe.jpg" data-zoom-image="http://localhost/ecommerce/src/storage/app/imagenesProducto/BlusadamaoldfasionbMvrfCo8xe.jpg"> 
            <img src="http://localhost/ecommerce/src/storage/app/imagenesProducto/BlusadamaoldfasionbMvrfCo8xe.jpg">
        </a>
	</div> <!-- thumbs-wrap.// -->
</article> <!-- gallery-wrap .end// -->
		</aside>
		<main class="col-sm-6">
<article class="content-body">
	<h3 class="title">Logitec gaming headphone</h3>
	<div class="rating-wrap mb-3">
		<span class="badge badge-warning"> <i class="fa fa-star"></i> 3.8</span>
		<small class="text-muted ml-2">45 reviews</small>
	</div>
	<p>Here goes description consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco </p>

<ul class="list-check mb-4">
	<li>Best performance of battery</li>
	<li>5 years warranty for this product</li>
	<li>Best performance of battery</li>
</ul>

<div class="item-option-select">
	<h6>Model</h6>
	<div class="btn-group btn-group-sm btn-group-toggle" data-toggle="buttons">
	  <label class="btn btn-light active">
	    <input type="radio" name="radio_size" checked> Xs
	  </label>
	  <label class="btn btn-light">
	    <input type="radio" name="radio_size"> Xs Max
	  </label>
	</div>
</div>

<div class="item-option-select">
	<h6>Color</h6>
	<div class="btn-group btn-group-sm btn-group-toggle" data-toggle="buttons">
	  <label class="btn btn-light">
	    <input type="radio" name="radio_color"> Silver
	  </label>
	  <label class="btn btn-light active">
	    <input type="radio" name="radio_color" checked> Gray
	  </label>
	  <label class="btn btn-light">
	    <input type="radio" name="radio_color"> Gold
	  </label>
	</div> 
</div>

<div class="item-option-select">
	<h6>Capacity</h6>
	<div class="btn-group btn-group-sm btn-group-toggle" data-toggle="buttons">
	  <label class="btn btn-light active">
	    <input type="radio" name="options" checked> 64 GB
	  </label>
	  <label class="btn btn-light">
	    <input type="radio" name="options"> 256 GB
	  </label>
	  <label class="btn btn-light">
	    <input type="radio" name="options"> 512 GB 
	  </label>
	</div>
</div>


<div class="row mt-3 align-items-center">
	<div class="col">
		<span class="price h4">$815.00</span> 
	</div> <!-- col.// -->
	<div class="col text-right">
		<a href="#" class="btn  btn-primary"> <span class="text">Add to cart</span> <i class="icon fas fa-shopping-cart"></i>  </a>
		<a href="#" class="btn  btn-light"> <i class="fas fa-heart"></i>  </a>
		<a href="#" class="btn  btn-light"> <i class="fa fa-folder-plus"></i>  </a>
	</div> <!-- col.// -->
</div> <!-- row.// -->

</article> <!-- product-info-aside .// -->
		</main> <!-- col.// -->
	</div> <!-- row.// -->
</div> <!-- card.// -->
<!-- ============================ COMPONENT 3 END .// ================================= -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/elevatezoom/2.2.3/jquery.elevatezoom.min.js"
        integrity="sha512-UH428GPLVbCa8xDVooDWXytY8WASfzVv3kxCvTAFkxD2vPjouf1I3+RJ2QcSckESsb7sI+gv3yhsgw9ZhM7sDw=="
        crossorigin="anonymous"></script>
<script>
    $("#zoom-detalle-producto").elevateZoom({
        zoomType: "inner",
        cursor: "crosshair",
        gallery : "galeria-detalle-producto",
        galleryActiveClass: "active",
    });
</script>
@endsection