@extends('layouts.app')

@section('content')
<!-- / Start Banner Section -->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="margin-top: 155px;">
    <div class="carousel-inner">
        @foreach($getBanner as $key => $banner)
        <div class="carousel-item {{ $key == 0 ? 'active' : ''}}">
            <img src="{{ $banner->imagen }}" class="d-block w-100 img-fluid" alt="{{ $banner->titulo }}"  style="border-radius: 10px; height: 350px;">
        </div>
        @endforeach
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
<!-- / End Banner Section -->

<h3 class="text-center font-weight-normal text-muted my-4">Nuevos Estilos</h3>
<div class="row mt-3">
    <div class="col-lg-2 col-md-4 col-sm-6 col-6">
        <div class="product-grid2">
            <div class="product-image2">
                <a href="#">
                    <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo3/images/img-1.jpeg">
                    <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo3/images/img-2.jpeg">
                </a>
                <ul class="social">
                    <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                    <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                    <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
                <a class="add-to-cart" href="">Add to cart</a>
            </div>
            <div class="product-content">
                <h3 class="title"><a href="#">Women's Designer Top</a></h3>
                <span class="price">$599.99</span>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-md-4 col-sm-6 col-6">
        <div class="product-grid2">
            <div class="product-image2">
                <a href="#">
                    <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo3/images/img-3.jpeg">
                    <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo3/images/img-4.jpeg">
                </a>
                <ul class="social">
                    <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                    <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                    <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
                <a class="add-to-cart" href="">Add to cart</a>
              </div>
              <div class="product-content">
                  <h3 class="title"><a href="#">Women's Yellow Top</a></h3>
                  <span class="price">$699.99</span>
              </div>
          </div>
    </div>
    <div class="col-lg-2 col-md-4 col-sm-6 col-6">
        <div class="product-grid2">
            <div class="product-image2">
                <a href="#">
                    <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo3/images/img-5.jpeg">
                    <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo3/images/img-6.jpeg">
                </a>
                <ul class="social">
                    <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                    <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                    <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
                <a class="add-to-cart" href="">Add to cart</a>
            </div>
            <div class="product-content">
                <h3 class="title"><a href="#">Women's Designer Top</a></h3>
                <span class="price">$599.99</span>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-md-4 col-sm-6 col-6">
        <div class="product-grid2">
            <div class="product-image2">
                <a href="#">
                    <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo3/images/img-7.jpeg">
                    <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo3/images/img-8.jpeg">
                </a>
                <ul class="social">
                    <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                    <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                    <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
                <a class="add-to-cart" href="">Add to cart</a>
            </div>
            <div class="product-content">
                <h3 class="title"><a href="#">Women's Designer Top</a></h3>
                <span class="price">$599.99</span>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-md-4 col-sm-6 col-6">
        <div class="product-grid2">
            <div class="product-image2">
                <a href="#">
                    <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-1.jpg">
                    <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-2.jpg">
                </a>
                <ul class="social">
                    <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                    <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                    <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
                <a class="add-to-cart" href="">Add to cart</a>
            </div>
            <div class="product-content">
                <h3 class="title"><a href="#">Women's Designer Top</a></h3>
                <span class="price">$599.99</span>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-md-4 col-sm-6 col-6">
        <div class="product-grid2">
            <div class="product-image2">
                <a href="#">
                    <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-5.jpg">
                    <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-6.jpg">
                </a>
                <ul class="social">
                    <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                    <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                    <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
                <a class="add-to-cart" href="">Add to cart</a>
            </div>
            <div class="product-content">
                <h3 class="title"><a href="#">Women's Designer Top</a></h3>
                <span class="price">$599.99</span>
            </div>
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-lg-2 col-md-4 col-sm-6 col-6">
        <div class="product-grid2">
            <div class="product-image2">
                <a href="#">
                    <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-3.jpg">
                    <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-4.jpg">
                </a>
                <ul class="social">
                    <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                    <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                    <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
                <a class="add-to-cart" href="">Add to cart</a>
            </div>
            <div class="product-content">
                <h3 class="title"><a href="#">Women's Designer Top</a></h3>
                <span class="price">$599.99</span>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-md-4 col-sm-6 col-6">
        <div class="product-grid2">
            <div class="product-image2">
                <a href="#">
                    <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-7.jpg">
                    <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-8.jpg">
                </a>
                <ul class="social">
                    <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                    <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                    <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
                <a class="add-to-cart" href="">Add to cart</a>
              </div>
              <div class="product-content">
                  <h3 class="title"><a href="#">Women's Yellow Top</a></h3>
                  <span class="price">$699.99</span>
              </div>
          </div>
    </div>
    <div class="col-lg-2 col-md-4 col-sm-6 col-6">
        <div class="product-grid2">
            <div class="product-image2">
                <a href="#">
                    <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo3/images/img-5.jpeg">
                    <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo3/images/img-6.jpeg">
                </a>
                <ul class="social">
                    <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                    <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                    <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
                <a class="add-to-cart" href="">Add to cart</a>
            </div>
            <div class="product-content">
                <h3 class="title"><a href="#">Women's Designer Top</a></h3>
                <span class="price">$599.99</span>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-md-4 col-sm-6 col-6">
        <div class="product-grid2">
            <div class="product-image2">
                <a href="#">
                    <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo3/images/img-7.jpeg">
                    <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo3/images/img-8.jpeg">
                </a>
                <ul class="social">
                    <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                    <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                    <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
                <a class="add-to-cart" href="">Add to cart</a>
            </div>
            <div class="product-content">
                <h3 class="title"><a href="#">Women's Designer Top</a></h3>
                <span class="price">$599.99</span>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-md-4 col-sm-6 col-6">
        <div class="product-grid2">
            <div class="product-image2">
                <a href="#">
                    <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-1.jpg">
                    <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-2.jpg">
                </a>
                <ul class="social">
                    <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                    <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                    <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
                <a class="add-to-cart" href="">Add to cart</a>
            </div>
            <div class="product-content">
                <h3 class="title"><a href="#">Women's Designer Top</a></h3>
                <span class="price">$599.99</span>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-md-4 col-sm-6 col-6">
        <div class="product-grid2">
            <div class="product-image2">
                <a href="#">
                    <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-5.jpg">
                    <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-6.jpg">
                </a>
                <ul class="social">
                    <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                    <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                    <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
                <a class="add-to-cart" href="">Add to cart</a>
            </div>
            <div class="product-content">
                <h3 class="title"><a href="#">Women's Designer Top</a></h3>
                <span class="price">$599.99</span>
            </div>
        </div>
    </div>
</div>
@endsection
