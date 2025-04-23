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
        <meta property="og:title" content="Daftar Harga - B&C Cookies" />
        <meta
            name="description"
            content="B&C Cookies Bandung Pastry, bakery, and cookies"
        />
        <meta property="og:image" content="{{ asset('vendor/images/title-logo.png')}}" />
        <meta property="og:url" content="{{ env('APP_URL') }}" />
        <link rel="shortcut icon" href="{{ asset('vendor/images/title-logo.png') }}">
        <title>Daftar Harga - B&C Cookies</title>
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
                        <!--<li class="nav-item active">
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

      <!-- price List section -->
      <section class="category_product layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  DAFTAR HARGA
               </h2>
            </div>
            <div class="row">

               <div class="col-sm-6 col-md-4 col-lg-3 col-6">
                  <div class="box">
                     <div class="img-box">
                        <a class="fancybox" href="{{ asset('vendor/images/price-list/001.jpg')}}"><img src="{{ asset('vendor/images/price-list/001.jpg')}}" alt="001"/></a>
                     </div>
                  </div>
               </div>
               <div class="col-sm-6 col-md-4 col-lg-3 col-6">
                  <div class="box">
                     <div class="img-box">
                        <a class="fancybox" href="{{ asset('vendor/images/price-list/002.jpg')}}"><img src="{{ asset('vendor/images/price-list/002.jpg')}}" alt="002"/></a>
                     </div>
                  </div>
               </div>
               <div class="col-sm-6 col-md-4 col-lg-3 col-6">
                  <div class="box">
                     <div class="img-box">
                        <a class="fancybox" href="{{ asset('vendor/images/price-list/003.jpg')}}"><img src="{{ asset('vendor/images/price-list/003.jpg')}}" alt="003"/></a>
                     </div>
                  </div>
               </div>
               <div class="col-sm-6 col-md-4 col-lg-3 col-6">
                  <div class="box">
                     <div class="img-box">
                        <a class="fancybox" href="{{ asset('vendor/images/price-list/004.jpg')}}"><img src="{{ asset('vendor/images/price-list/004.jpg')}}" alt="004"/></a>
                     </div>
                  </div>
               </div>
               <div class="col-sm-6 col-md-4 col-lg-3 col-6">
                  <div class="box">
                     <div class="img-box">
                        <a class="fancybox" href="{{ asset('vendor/images/price-list/005.jpg')}}"><img src="{{ asset('vendor/images/price-list/005.jpg')}}" alt="005"/></a>
                     </div>
                  </div>
               </div>
               <div class="col-sm-6 col-md-4 col-lg-3 col-6">
                  <div class="box">
                     <div class="img-box">
                        <a class="fancybox" href="{{ asset('vendor/images/price-list/006.jpg')}}"><img src="{{ asset('vendor/images/price-list/006.jpg')}}" alt="006"/></a>
                     </div>
                  </div>
               </div>
               <div class="col-sm-6 col-md-4 col-lg-3 col-6">
                  <div class="box">
                     <div class="img-box">
                        <a class="fancybox" href="{{ asset('vendor/images/price-list/007.jpg')}}"><img src="{{ asset('vendor/images/price-list/007.jpg')}}" alt="007"/></a>
                     </div>
                  </div>
               </div>
               <div class="col-sm-6 col-md-4 col-lg-3 col-6">
                  <div class="box">
                     <div class="img-box">
                        <a class="fancybox" href="{{ asset('vendor/images/price-list/008.jpg')}}"><img src="{{ asset('vendor/images/price-list/008.jpg')}}" alt="008"/></a>
                     </div>
                  </div>
               </div>
               <div class="col-sm-6 col-md-4 col-lg-3 col-6">
                  <div class="box">
                     <div class="img-box">
                        <a class="fancybox" href="{{ asset('vendor/images/price-list/009.jpg')}}"><img src="{{ asset('vendor/images/price-list/009.jpg')}}" alt="009"/></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end price List section -->
      <!-- footer start -->
      <footer>
         <div class="container">
            <div class="row">
               <div class="col-md-7">
                   <div class="full">
                      <div class="logo_footer">
                        <a href="#"><img width="163" height="113" src="{{ asset('vendor/images/logo.png')}}" alt="Logo" /></a>
                      </div>
                      <div class="information_f">
                        <p> Jl. Sindangreret Kp. Kudang No 37 B RT 01/09
                           Ds. Cibru, Cibiru Wetan, <br>Kec. Cileunyi, Kabupaten Bandung
                           Jawa Barat 40165 <br> +62 81312072776 <br> bnc.cookiesbdg2@gmail.com</p>
                        <div class="mb-2">
                           <a target="_blank" href="https://www.instagram.com/bnc.cookiesbdg/" class="btn btn-outline-danger btn-sm"><i class="bi bi-instagram"></i></a>
                        <a target="_blank" href="https://www.tiktok.com/@bnc.cookiesbdg" class="btn btn-outline-dark btn-sm"><i class="bi bi-tiktok"></i></a>
                        <a target="_blank" href="https://api.whatsapp.com/send?phone=6281312072776&text=Halo%20admin%2C%20saya%20ingin%20memesan%20produk%20B%26C.%20Cookies%20Bandung" class="btn btn-outline-success btn-sm"><i class="bi bi-whatsapp"></i></a>
                        </div>
                      </div>
                   </div>
               </div>
               <div class="col-md-5">
                  <div class="row">
                  <div class="col-md-7">
                     <div class="row">
                        <div class="col-md-6">
                     <div class="widget_menu">
                        <h3>Menu</h3>
                        <ul>
                           <li><a href="{{ url('/')}}">Home</a></li>
                           <li><a href="{{ url('product')}}">Produk</a></li>
                           <li><a href="{{ url('price-list')}}">Daftar Harga</a></li>
                           <li><a href="{{ url('about')}}">Tentang Kami</li>
                           <li><a href="{{ url('contact')}}">Kontak Kami</a></li>
                        </ul>
                     </div>
                  </div>

                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- footer end -->
      <div class="cpy_">
         <p class="mx-auto">V1.0.0 - 2024 &copy B&C Cookies. All Rights Reserved.<br>
            Designed By <a href="https://yuk-mari.com/" target="_blank">Yuk-Mari Project</a>
         </p>
      </div>
      <!-- footer section -->
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

   </body>
</html>
