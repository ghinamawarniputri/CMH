<!DOCTYPE html>
<html>
    <head>
        <!-- Basic -->
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <!-- Site Metas -->
        <meta name="author" content="Yuk-Mari" />
        <meta property="og:site_name" content="B&C Cookies" />
        <meta property="og:site" content="{{ env('APP_URL')}}" />
        <meta property="og:title" content="Produk - B&C Cookies" />
        <meta
            name="description"
            content="B&C Cookies Bandung Pastry, bakery, and cookies"
        />
        <meta property="og:image" content="{{ asset('vendor/images/title-logo.png')}}" />
        <meta property="og:url" content="{{ env('APP_URL') }}" />
        <link rel="shortcut icon" href="{{ asset('vendor/images/title-logo.png') }}">
        <title>Produk - B&C Cookies</title>
        <!-- bootstrap core css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/css/bootstrap.css')}}" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
        <!-- font awesome style -->
        <link href="{{ asset('vendor/css/font-awesome.min.css')}}" rel="stylesheet" />
        <!-- Custom styles for this template -->
        <link href="{{ asset('vendor/css/style.css')}}" rel="stylesheet" />
        <!-- Fancybox -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css" type="text/css" media="screen" />
        <!-- responsive style -->
        <link href="{{ asset('vendor/css/responsive.css')}}" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/css/custome.css')}}">
     </head>
   <body class="sub_page">
      <div class="hero_area">
         <!-- header section strats -->
         <header class="header_section">
            <div class="container">
               <nav class="navbar navbar-expand-lg custom_nav-container ">
                  <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('vendor/images/logo.png')}}" alt="Logo" height="40" /></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class=""> </span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav">
                        <li class="nav-item">
                           <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown active">
                            <a class="nav-link dropdown-toggle" href="{{ url('product')}}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Produk
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ url('product') }}">Semua Produk</a>
                                <a class="dropdown-item" href="{{ url('product-bolen') }}">Bolen</a>
                                <a class="dropdown-item" href="{{ url('product-pastry') }}">Pastry</a>
                                <a class="dropdown-item" href="{{ url('product-kue-kering-500gr') }}">Kue Kering 500gr</a>
                                <a class="dropdown-item" href="{{ url('product-kue-kering-250gr') }}">Kue Kering 250gr</a>
                                <a class="dropdown-item" href="{{ url('product-hampers') }}">Hampers</a>
                                <a class="dropdown-item" href="{{ url('product-snack-dan-catering') }}">Snack dan Catering</a>
                            </div>
                        </li>
                        <!--<li class="nav-item">
                           <a class="nav-link" href="{{ url('price-list')}}">Daftar Harga</a>
                        </li>-->
                        <li class="nav-item dropdown active">
                            <a class="nav-link dropdown-toggle" href="{{ url('product')}}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Katalog Produk
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a target="_blank" class="dropdown-item" href="{{ url('/katalog/Katalog Bolen dan Kue Kering.pdf') }}">Katalog Bolen dan Kue Kering</a>
                                <a target="_blank" class="dropdown-item" href="{{ url('/katalog/Katalog Dapoer Catering SR.pdf') }}">Katalog Dapoer Catering SR</a>
                            </div>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{ url('about')}}">Tentang Kami</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{ url('contact')}}">Kontak Kami</a>
                        </li>
                        @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('admin') }}">Dashboard</a>
                        </li>
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('admin/login') }}">Log In</a>
                        </li>
                        @endauth
                     </ul>
                  </div>
               </nav>
            </div>
         </header>
         <!-- end header section -->
      </div>
      <!-- product section -->
      <section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  PRODUK BOLEN
               </h2>
            </div>
            <div class="row">
                @forelse($products as $product)
                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="box h-100">
                       <div class="img-box">
                          <a href="{{ asset('storage/'. $product->images)}}" class="fancybox"><img src="{{ asset('storage/'. $product->images)}}" alt="{{ $product->name }}"></a>
                       </div>
                       <div class="detail-box">
                          <p class="title">
                            {{ $product->name }}
                            <span class="categories"> <i class="bi bi-tag icon"></i> {{ $product->category->name }}</span>
                          </p>
                          <p class="price">Rp{{ number_format(intval($product->price), 0, ',', '.') }}</p>
                       </div>
                       <!--<a target="_blank" href="{{ $product->shopee_link }}"><img width="30" height="30" src="{{ asset('vendor/images/shopee-icon.png')}}"></a>-->
                       Yuk di order via Whatsapp : <a target="_blank" href="https://api.whatsapp.com/send?phone=62{{ env('PHONE_NUMBER') }}&text={{ $product->whatsapp_default_message }}"><img width="30" height="30" src="{{ asset('vendor/images/whatsapp-icon.webp')}}"></a>

                    </div>
                 </div>
                @empty
                 <div class="col-sm-12">
                    <h4 class="text-center">Produk Tidak Tersedia</h4>
                 </div>
                @endforelse

            </div>
         </div>
      </section>
      <!-- end product section -->

      <!-- footer start -->
      @include("layouts.footer")
      <!-- footer end -->
      <div class="cpy_">
         <p class="mx-auto">V1.0.0 - 2024 &copy B&C Cookies. All Rights Reserved.<br>
            Designed By <a href="https://yuk-mari.com/" target="_blank">Yuk-Mari Project</a>
         </p>
      </div>
      <!-- jQery -->
      <script src="{{ asset('vendor/js/jquery-3.4.1.min.js')}}"></script>
      <!-- fancybox -->
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
      <script type="text/javascript">
        $(document).ready(function() {
          $(".fancybox").fancybox();
        });
      </script>
      <!-- popper js -->
      <script src="{{ asset('vendor/js/popper.min.js')}}"></script>
      <!-- bootstrap js -->
      <script src="{{ asset('vendor/js/bootstrap.js')}}"></script>
      <!-- custom js -->
      <script src="{{ asset('vendor/js/custom.js')}}"></script>
      @vite(['resources/js/app.js', 'resources/css/app.css', 'resources/css/footer.css'])
   </body>
</html>
