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
      content="B&C Cookies Bandung Pastry, bakery, and cookies" />
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

   <!-- portfolios section -->
   <section class="bg-dark text-light py-5">
      <div class="container">
         <h2 class="text-center mb-4">
            🎼 <span style="color: #ff3399;">Portofolio</span> 🎼
         </h2>

         <div id="portfolioCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
               @foreach ($portfolios->chunk(3) as $chunkIndex => $chunk)
               <div class="row mb-4">
                  @foreach ($chunk as $item)
                  <div class="col-md-4">
                     <div class="card bg-dark text-light shadow-sm">
                        <div class="card-body">
                           <h5 class="card-title">{{ $item->name }}</h5>
                           <p class="card-text"><em>{{ $item->genre }}</em></p>
                           <iframe
                              width="100%"
                              height="166"
                              scrolling="no"
                              frameborder="no"
                              allow="autoplay"
                              src="https://w.soundcloud.com/player/?url={{ urlencode($item->link) }}&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true">
                           </iframe>
                        </div>
                     </div>
                  </div>
                  @endforeach
               </div>
               @endforeach
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#portfolioCarousel" data-bs-slide="prev">
               <span class="carousel-control-prev-icon bg-dark rounded-circle" aria-hidden="true"></span>
               <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#portfolioCarousel" data-bs-slide="next">
               <span class="carousel-control-next-icon bg-dark rounded-circle" aria-hidden="true"></span>
               <span class="visually-hidden">Next</span>
            </button>
         </div>
      </div>
   </section>

   <!-- end portfolios section -->

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