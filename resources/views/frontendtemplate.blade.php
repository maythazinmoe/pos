<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content=""/>
  <meta name="author" content="" />
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title> Sale and Inventory Management System </title>

  <!-- iconfont CSS -->
  <link rel="stylesheet" type="text/css" href="{{ asset('frontend/icon/icofont/icofont.min.css')}}">
  <!-- Boxicon CSS -->
  <link rel="stylesheet" type="text/css" href="{{ asset('frontend/icon/boxicons-master/css/boxicons.min.css')}}">
  
  <!-- CUSTOM CSS -->
  <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/font.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/media_query.css')}}">
  
  <!-- BOOTSTRAP CSS -->
  <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.min.css')}}">

  <!-- OWL CAROUSEL -->
  <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/owl.carousel.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/owl.theme.default.css')}}">

</head>
<body>

  {{-- Navigation Start --}}
      <nav class="navbar navbar-expand-lg navbar-light bg-success">
  <a class="navbar-brand" href="#">Shop By</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('homepage')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('aboutpage')}}">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('contactpage')}}">Contact</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
  {{-- Navigation End --}}

  @yield('content')

 
  <script type="text/javascript" src="{{ asset('frontend/js/jquery.min.js')}}"></script>
  <!-- BOOTSTRAP JS -->
  <script type="text/javascript" src="{{ asset('frontend/js/bootstrap.bundle.min.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
  <script type="text/javascript" src="{{ asset('frontend/js/custom.js')}}"></script>

  <!-- Owl Carousel -->
  <script type="text/javascript" src="{{ asset('frontend/js/owl.carousel.js')}}"></script>
  <script type="text/javascript" src="{{ asset('frontend/js/localstorage_custom.js')}}"></script>

</body>
</html>