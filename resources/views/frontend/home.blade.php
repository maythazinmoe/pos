@extends('frontendtemplate')

@section('content')
  <!-- Carousel -->
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('frontend/image/carousel1.jpg')}}" class="d-block w-100" height="700">
      <div class="carousel-caption d-none d-md-block">
         <h1 style="color: green;font-size: 50px; padding-bottom:  250px;font-family: cursive; padding-right: 400px;">Give your freezer a break,buy fresh everyday!</h1>
        {{--  <button type="button" class="btn btn-success" style="margin-bottom: 170px;">SHOP NOW</button> --}}
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('frontend/image/carousel2.jpg')}}" class="d-block w-100" height="700">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('frontend/image/carousel3.jpg')}}" class="d-block w-100" height="700">
      <div class="carousel-caption d-none d-md-block">
        
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- Content -->
  <div class="container mt-5 px-5">
    <!-- Category -->
    <div class="row">
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 ">
        <div class="card categoryCard border-0 shadow-sm p-3 mb-5 rounded text-center">
            <img src="{{ asset('frontend/image/category/fruit.png')}}" class="card-img-top"height="170px;">
            <div class="card-body">
              <p class="card-text font-weight-bold text-truncate"> Fruit </p>
            </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 ">
        <div class="card categoryCard border-0 shadow-sm p-3 mb-5 rounded text-center">
            <img src="{{ asset('frontend/image/category/milk.jpg')}}" class="card-img-top" height="170px;">
            <div class="card-body">
              <p class="card-text font-weight-bold text-truncate"> Milk </p>
            </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 ">
        <div class="card categoryCard border-0 shadow-sm p-3 mb-5 rounded text-center">
            <img src="{{ asset('frontend/image/category/icecream.jpg')}}" class="card-img-top" height="170px;">
            <div class="card-body">
              <p class="card-text font-weight-bold text-truncate"> Ice-cream </p>
            </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 ">
        <div class="card categoryCard border-0 shadow-sm p-3 mb-5 rounded text-center">
            <img src="{{ asset('frontend/image/category/bakery.jpg')}}" class="card-img-top" height="170px;">
            <div class="card-body">
              <p class="card-text font-weight-bold text-truncate"> Bakery </p>
            </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 ">
        <div class="card categoryCard border-0 shadow-sm p-3 mb-5 rounded text-center">
            <img src="{{ asset('frontend/image/category/juice.jpg')}}" class="card-img-top" height="170px;">
            <div class="card-body">
              <p class="card-text font-weight-bold text-truncate"> Juice </p>
            </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 ">
        <div class="card categoryCard border-0 shadow-sm p-3 mb-5 rounded text-center">
            <img src="{{ asset('frontend/image/category/chocolate.jpg')}}" class="card-img-top" height="170px;">
            <div class="card-body">
              <p class="card-text font-weight-bold text-truncate"> Chocolate </p>
            </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 ">
        <div class="card categoryCard border-0 shadow-sm p-3 mb-5 rounded text-center">
            <img src="{{ asset('frontend/image/category/vegetable.png')}}" class="card-img-top" height="170px;">
            <div class="card-body">
              <p class="card-text font-weight-bold text-truncate"> Vegetable </p>
            </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 ">
        <div class="card categoryCard border-0 shadow-sm p-3 mb-5 rounded text-center">
            <img src="{{ asset('frontend/image/category/candy.jpg')}}" class="card-img-top" height="170px;">
            <div class="card-body">
              <p class="card-text font-weight-bold text-truncate"> Fruit Salad </p>
            </div>
        </div>
      </div>
    </div>
</div>

      <div id="banner">
      <div class="container mt-5 px-5">
        <h1 style="font-family: cursive; font-variant: small-caps; text-align: center;padding-top: 30px;">Our Services</h1>
    <div class="row">
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
        <div class="card categoryCard border-0 shadow-sm p-3 mb-5 rounded text-center">
            <img src="{{ asset('frontend/image/service1.jpeg')}}" class="card-img-top" height="215px;">
            <div class="card-body">
              <p class="card-text font-weight-bold text-truncate">Fresh product</p>
            </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 ">
        <div class="card categoryCard border-0 shadow-sm p-3 mb-5 rounded text-center">
            <img src="{{ asset('frontend/image/service2.jpg')}}" class="card-img-top"height="215px;">
            <div class="card-body">
              <p class="card-text font-weight-bold text-truncate"> Customer Support </p>
            </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 ">
        <div class="card categoryCard border-0 shadow-sm p-3 mb-5 rounded text-center">
            <img src="{{ asset('frontend/image/service3.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text font-weight-bold text-truncate"> Promotion </p>
            </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 ">
        <div class="card categoryCard border-0 shadow-sm p-3 mb-5 rounded text-center">
            <img src="{{ asset('frontend/image/service4.png')}}" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text font-weight-bold text-truncate"> We cover<br>large area. </p>
            </div>
        </div>
      </div>
</div></div>
    </div>

    <div class="bg-secondary">
    <div class="container">
      <div class="row py-5">
        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
          <h5><b>TOWNSHIPS</b></h5><br>
          <p>Sanchaung<p>
          <p>Thingangyun</p>
          <p>Hlaing</p>
          <p>South Dagon</p>
          <p>&& many more...</p>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
          <h5><b>PRODUCTS</b></h5><br>
          <p>Milk & Crub</p>
          <p>Julice</p>
          <p>Fruits & Vegetable</p>
          <p>Chocolate & Ice-cream</p>
          <p>&& many more...</p>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
          <h5><b>ABOUT US</b></h5><br>
          <p>Company Information<p>
          <p>Careers</p>
          <p>Terms & Conditions</p>
          <p>Privacy Policy</p>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
         <h5><b>VISIT US</b></h5><br>
          <p>www.sale4u.com<p>
        </div>
      </div>
    </div>
  </div>

@endsection