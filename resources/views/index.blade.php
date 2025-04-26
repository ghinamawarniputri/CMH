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
      <meta property="og:title" content="Home - B&C Cookies" />
      <meta
         name="description"
         content="B&C Cookies Bandung Pastry, bakery, and cookies"
       />
      <meta property="og:image" content="{{ asset('vendor/images/title-logo.png')}}" />
      <meta property="og:url" content="{{ env('APP_URL') }}" />
      <link rel="shortcut icon" href="{{ asset('vendor/images/title-logo.png') }}">
      <title>Home - B&C Cookies</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="{{ asset('vendor/css/bootstrap.css')}}" />
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
      <!-- font awesome style -->
      <link href="{{ asset('vendor/css/font-awesome.min.css')}}" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="{{ asset('vendor/css/style.css')}}" rel="stylesheet" />
      <!-- responsive style -->
      <link href="{{ asset('vendor/css/responsive.css')}}" rel="stylesheet" />
      <link rel="stylesheet" type="text/css" href="{{ asset('vendor/css/custome.css')}}">
      <link rel="stylesheet" href="{{ asset('css/produk.css') }}">
   </head>
   <body>
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
                        <li class="nav-item active">
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
         <!-- slider section -->
         <section class="slider_section ">
            <div class="slider_bg_box">
               <img src="{{ asset('vendor/images/hero-bg.jpeg')}}" alt="Hero Background">
            </div>
            <div id="customCarousel1" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container ">
                        <div class="row">
                           <div class="col-md-7 col-lg-6 ">
                              <div class="detail-box">
                                 <h1>
                                    B&C Cookies Bandung
                                 </h1>
                                 <p>
                                    Freshly Baked by Mahasiswa
                                 </p>

                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- <div class="container">
                  <ol class="carousel-indicators">
                     <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
                  </ol>
               </div> -->
            </div>
         </section>
         <!-- end slider section -->
      </div>
      <!-- why section -->
      <section class="catalog w-100 min-vh-100">
         <div class="container">
             <div class="row">
                 <div class="col">
                     <h1 class="text-center fw-bold">
                         <img src="{{ asset('img/logo-produk-kami.svg') }}" alt="Logo Produk Kami" class="logo-svg">
                         Produk Kami
                         <img src="{{ asset('img/logo-produk-kami.svg') }}" alt="Logo Produk Kami" class="logo-svg">
                     </h1>
                     <p class="text-center">Ciptakan Musik impianmu dengan mudah hanya dalam hitungan menit!</p>
                 </div>
             </div>
             <div class="grid">
                 <div class="product-card p-3 border rounded shadow-sm h-100">
                     <div class="image-container">
                         <img src="{{ asset('img/msc.lyrc.jpg') }}" alt="Buat Musik melalui Lyric" class="w-100 mb-2 rounded" style="height: 200px; object-fit: cover;">
                     </div>
                     <div class="p-4">
                         <h5 class="text-xl font-bold mb-2">Buat Musik melalui Lyric</h5>
                         <ul class="features-list ps-2 mb-2">
                             <li class="mb-1 text-secondary"><small>Penyanyi Pria/Wanita</small></li>
                             <li class="mb-1 text-secondary"><small>profesional &amp; MIRIP</small></li>
                             <li class="mb-1 text-secondary"><small>Durasi maksimal 3 menit</small></li>
                         </ul>
                         <p class="price-tag mb-0">
                             <span class="price-icon me-2">Rp</span> 55.000
                         </p>
                         <div class="flex items-center justify-between mb-2 pt-2">
                             <div class="user-stats d-flex align-items-center mb-3">
                                 <div class="user-icon-wrapper me-2">
                                     <span class="user-icon">👤</span>
                                 </div>
                                 <span>0 kali</span>
                             </div>
                         </div>
                         <button class="learn-more-btn">
                             Pesan Sekarang →
                         </button>
                     </div>
                 </div>
                 <div class="product-card p-3 border rounded shadow-sm h-100">
                     <div class="image-container">
                         <img src="{{ asset('img/msc.ins.jpg') }}" alt="Buat Musik Instrumen" class="w-100 mb-2 rounded" style="height: 200px; object-fit: cover;">
                     </div>
                     <div class="p-4">
                         <h5 class="text-xl font-bold mb-2">Buat Musik Instrumen</h5>
                         <ul class="features-list ps-2 mb-2">
                             <li class="mb-1 text-secondary"><small>Pemain Tambahan Terbaru</small></li>
                             <li class="mb-1 text-secondary"><small>gitar, bass &amp; drum</small></li>
                             <li class="mb-1 text-secondary"><small>Durasi maksimal 3 menit</small></li>
                         </ul>
                         <p class="price-tag mb-0">
                             <span class="price-icon me-2">Rp</span> 55.000
                         </p>
                         <div class="flex items-center justify-between mb-2 pt-2">
                             <div class="user-stats d-flex align-items-center mb-3">
                                 <div class="user-icon-wrapper me-2">
                                     <span class="user-icon">👤</span>
                                 </div>
                                 <span>0 kali</span>
                             </div>
                         </div>
                         <button class="learn-more-btn">
                             Pesan Sekarang →
                         </button>
                     </div>
                 </div>
                 <div class="product-card p-3 border rounded shadow-sm h-100">
                     <div class="image-container">
                         <img src="{{ asset('img/s.effct.jpg') }}" alt="Buat Sound Effect" class="w-100 mb-2 rounded" style="height: 200px; object-fit: cover;">
                     </div>
                     <div class="p-4">
                         <h5 class="text-xl font-bold mb-2">Buat Sound Effect</h5>
                         <ul class="features-list ps-2 mb-2">
                             <li class="mb-1 text-secondary"><small>Pemain Tambahan Terbaru</small></li>
                             <li class="mb-1 text-secondary"><small>vokal, gitar &amp; drum</small></li>
                             <li class="mb-1 text-secondary"><small>Durasi maksimal 30 detik</small></li>
                         </ul>
                         <p class="price-tag mb-0">
                             <span class="price-icon me-2">Rp</span> 55.000
                         </p>
                         <div class="flex items-center justify-between mb-2 pt-2">
                             <div class="user-stats d-flex align-items-center mb-3">
                                 <div class="user-icon-wrapper me-2">
                                     <span class="user-icon">👤</span>
                                 </div>
                                 <span>0 kali</span>
                             </div>
                         </div>
                         <button class="learn-more-btn">
                             Pesan Sekarang →
                         </button>
                     </div>
                 </div>
             </div>
         </div>
     </section>
      <!-- end why section -->

      <!-- product categories section -->
      <section class="category_product layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  KLIK UNTUK LIHAT PRODUK KAMI DIBAWAH INI
               </h2>
            </div>
            <div class="row">
                @forelse($categories as $category)
                <div class="col-sm-6 col-md-4 col-lg-3 col-6">
                    <div class="box">
                       <div class="img-box">
                          <a href="{{ strtolower(str_replace(' ', '-', url('product-'. $category->name))) }}"><img src="{{ asset('storage/' . $category->images)}}" width="450" height="200" alt="Bolen"></a>
                          <div class="cat-title-centered">{{ $category->name }}</div>
                       </div>
                    </div>
                 </div>
                @empty
                 <div class="col-sm-12">
                    <h4 class="text-center">Kategori Tidak Tersedia</h4>
                 </div>
                @endforelse
            </div>
            <!-- <div class="btn-box">
               <a href="">
               View All products
               </a>
            </div> -->
         </div>
      </section>
      <!-- end product categories section -->

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
      <!-- popper js -->
      <script src="{{ asset('vendor/js/popper.min.js')}}"></script>
      <!-- bootstrap js -->
      <script src="{{ asset('vendor/js/bootstrap.js')}}"></script>
      <!-- custom js -->
      <script src="{{ asset('vendor/js/custom.js')}}"></script>
   </body>
</html>
