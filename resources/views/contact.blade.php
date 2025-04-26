<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="author" content="Yuk-Mari" />
    <meta property="og:site_name" content="B&C Cookies" />
    <meta property="og:site" content="{{ env('APP_URL')}}" />
    <meta property="og:title" content="Kontak Kami - B&C Cookies" />
    <meta
        name="description"
        content="B&C Cookies Bandung Pastry, bakery, and cookies"
    />
    <meta property="og:image" content="{{ asset('vendor/images/title-logo.png')}}" />
    <meta property="og:url" content="{{ env('APP_URL') }}" />
    <link rel="shortcut icon" href="{{ asset('vendor/images/title-logo.png') }}">
    <title>Kontak Kami - B&C Cookies</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/css/bootstrap.css')}}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    <link href="{{ asset('vendor/css/font-awesome.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('vendor/css/style.css')}}" rel="stylesheet" />
    <link href="{{ asset('vendor/css/responsive.css')}}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/css/custome.css')}}">
    <link rel="stylesheet" href="{{ asset('css/support.css') }}">
   </head>
  <body class="sub_page">
    <div class="hero_area">
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
                            <li class="nav-item dropdown">
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
                            <li class="nav-item dropdown">
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
                            <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="{{ url('product')}}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  DUKUNGAN
                              </a>
                              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="{{ url('contact') }}">Hubungi Kami</a>
                                  <a class="dropdown-item" href="https://www.instagram.com/yukmaridotcom/#" target="_blank">Instagram</a>
                              </div>
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
        </div>

<section class="contact_section layout_padding contact-us">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Kontak Kami
            </h2>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="contact-info">
                    <h4>Alamat</h4>
                    <p class="p-alamat">Komp. Bandung Indah Raya, Blok G1A No.77, RT. 06/RW. 08, Mekarjaya, Kec. Rancasari, Kota Bandung, Jawa Barat 40292</p>
                </div>
                <div class="contact-info mt-4">
                    <h4>Telepon</h4>
                    <p>+62 822-9560-3115</p>
                </div>
                <div class="contact-info mt-4">
                    <h4>Email</h4>
                    <p>yukmari2211@gmail.com</p>
                </div>
            </div>
            <div class="col-md-6">
                <form method="POST" action="/contact/send" novalidate>
                    @csrf
                    <div>
                        <label for="nama">Nama Anda</label>
                        <input type="text" id="nama" placeholder="Nama Anda" name="user_name" class="form-control" required autocomplete="off" />
                    </div>
                    <div>
                        <label for="email">Email Anda</label>
                        <input type="email" id="email" placeholder="Email Anda" name="email_name" class="form-control" required autocomplete="off" />
                    </div>
                    <div>
                        <label for="pesan">Pesan Anda</label>
                        <textarea class="form-control" id="pesan" name="message" rows="5" placeholder="Pesan Anda" required autocomplete="off"></textarea>
                    </div>
                    <div class="recaptcha-container">
                        <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>
                        <input type="hidden" name="recaptcha_token" id="recaptcha_token">
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="cta-support">
                            Kirim Pesan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="full">
                    <div class="logo_footer">
                        <a href="#"><img width="163" height="113" src="{{ asset('vendor/images/logo.png')}}" alt="Logo" /></a>
                    </div>
                    <div class="information_f">
                        <p> Jl. Sindangreret Kp. Kudang No 37 B RT 01/09 Ds. Cibiru, Cibiru Wetan, <br>Kec. Cileunyi, Kabupaten Bandung Jawa Barat 40165 <br> +62 813-1207-2776 <br> bnc.cookiesbdg2@gmail.com</p>
                        <div class="mb-2">
                            <a target="_blank" href="https://www.instagram.com/bnc.cookiesbdg/" class="btn btn-outline-danger btn-sm"><i class="bi bi-instagram"></i></a>
                            <a target="_blank" href="https://www.tiktok.com/@bnc.cookiesbdg" class="btn btn-outline-dark btn-sm"><i class="bi bi-tiktok"></i></a>
                            <a target="_blank" href="https://api.whatsapp.com/send?phone=6281312072776&text=Halo%20admin%2C%20saya%20ingin%20bertanya..." class="btn btn-outline-success btn-sm"><i class="bi bi-whatsapp"></i></a>
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
        </div>
    </div>
</footer>
<div class="cpy_">
    <p class="mx-auto">V1.0.0 - 2024 © B&C Cookies. All Rights Reserved.<br>
        Designed By <a href="https://yuk-mari.com/" target="_blank">Yuk-Mari Project</a>
    </p>
</div>
<script src="{{ asset('vendor/js/jquery-3.4.1.min.js')}}"></script>
<script src="{{ asset('vendor/js/popper.min.js')}}"></script>
<script src="{{ asset('vendor/js/bootstrap.js')}}"></script>
<script src="{{ asset('vendor/js/custom.js')}}"></script>
</body>
</html>