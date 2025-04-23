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
      <section class="why_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  DARI KAMI UNTUK ANDA
               </h2>
            </div>
            <div class="row">
               <div class="col-md-4">
                  <div class="box ">
                     <div class="img-box">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                           <g>
                              <g>
                                 <path d="M476.158,231.363l-13.259-53.035c3.625-0.77,6.345-3.986,6.345-7.839v-8.551c0-18.566-15.105-33.67-33.67-33.67h-60.392
                                    V110.63c0-9.136-7.432-16.568-16.568-16.568H50.772c-9.136,0-16.568,7.432-16.568,16.568V256c0,4.427,3.589,8.017,8.017,8.017
                                    c4.427,0,8.017-3.589,8.017-8.017V110.63c0-0.295,0.239-0.534,0.534-0.534h307.841c0.295,0,0.534,0.239,0.534,0.534v145.372
                                    c0,4.427,3.589,8.017,8.017,8.017c4.427,0,8.017-3.589,8.017-8.017v-9.088h94.569c0.008,0,0.014,0.002,0.021,0.002
                                    c0.008,0,0.015-0.001,0.022-0.001c11.637,0.008,21.518,7.646,24.912,18.171h-24.928c-4.427,0-8.017,3.589-8.017,8.017v17.102
                                    c0,13.851,11.268,25.119,25.119,25.119h9.086v35.273h-20.962c-6.886-19.883-25.787-34.205-47.982-34.205
                                    s-41.097,14.322-47.982,34.205h-3.86v-60.393c0-4.427-3.589-8.017-8.017-8.017c-4.427,0-8.017,3.589-8.017,8.017v60.391H192.817
                                    c-6.886-19.883-25.787-34.205-47.982-34.205s-41.097,14.322-47.982,34.205H50.772c-0.295,0-0.534-0.239-0.534-0.534v-17.637
                                    h34.739c4.427,0,8.017-3.589,8.017-8.017s-3.589-8.017-8.017-8.017H8.017c-4.427,0-8.017,3.589-8.017,8.017
                                    s3.589,8.017,8.017,8.017h26.188v17.637c0,9.136,7.432,16.568,16.568,16.568h43.304c-0.002,0.178-0.014,0.355-0.014,0.534
                                    c0,27.996,22.777,50.772,50.772,50.772s50.772-22.776,50.772-50.772c0-0.18-0.012-0.356-0.014-0.534h180.67
                                    c-0.002,0.178-0.014,0.355-0.014,0.534c0,27.996,22.777,50.772,50.772,50.772c27.995,0,50.772-22.776,50.772-50.772
                                    c0-0.18-0.012-0.356-0.014-0.534h26.203c4.427,0,8.017-3.589,8.017-8.017v-85.511C512,251.989,496.423,234.448,476.158,231.363z
                                    M375.182,144.301h60.392c9.725,0,17.637,7.912,17.637,17.637v0.534h-78.029V144.301z M375.182,230.881v-52.376h71.235
                                    l13.094,52.376H375.182z M144.835,401.904c-19.155,0-34.739-15.583-34.739-34.739s15.584-34.739,34.739-34.739
                                    c19.155,0,34.739,15.583,34.739,34.739S163.99,401.904,144.835,401.904z M427.023,401.904c-19.155,0-34.739-15.583-34.739-34.739
                                    s15.584-34.739,34.739-34.739c19.155,0,34.739,15.583,34.739,34.739S446.178,401.904,427.023,401.904z M495.967,299.29h-9.086
                                    c-5.01,0-9.086-4.076-9.086-9.086v-9.086h18.171V299.29z" />
                              </g>
                           </g>
                           <g>
                              <g>
                                 <path d="M144.835,350.597c-9.136,0-16.568,7.432-16.568,16.568c0,9.136,7.432,16.568,16.568,16.568
                                    c9.136,0,16.568-7.432,16.568-16.568C161.403,358.029,153.971,350.597,144.835,350.597z" />
                              </g>
                           </g>
                           <g>
                              <g>
                                 <path d="M427.023,350.597c-9.136,0-16.568,7.432-16.568,16.568c0,9.136,7.432,16.568,16.568,16.568
                                    c9.136,0,16.568-7.432,16.568-16.568C443.591,358.029,436.159,350.597,427.023,350.597z" />
                              </g>
                           </g>
                           <g>
                              <g>
                                 <path d="M332.96,316.393H213.244c-4.427,0-8.017,3.589-8.017,8.017s3.589,8.017,8.017,8.017H332.96
                                    c4.427,0,8.017-3.589,8.017-8.017S337.388,316.393,332.96,316.393z" />
                              </g>
                           </g>
                           <g>
                              <g>
                                 <path d="M127.733,282.188H25.119c-4.427,0-8.017,3.589-8.017,8.017s3.589,8.017,8.017,8.017h102.614
                                    c4.427,0,8.017-3.589,8.017-8.017S132.16,282.188,127.733,282.188z" />
                              </g>
                           </g>
                           <g>
                              <g>
                                 <path d="M278.771,173.37c-3.13-3.13-8.207-3.13-11.337,0.001l-71.292,71.291l-37.087-37.087c-3.131-3.131-8.207-3.131-11.337,0
                                    c-3.131,3.131-3.131,8.206,0,11.337l42.756,42.756c1.565,1.566,3.617,2.348,5.668,2.348s4.104-0.782,5.668-2.348l76.96-76.96
                                    C281.901,181.576,281.901,176.501,278.771,173.37z" />
                              </g>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                        </svg>
                     </div>
                     <div class="detail-box">
                        <h5>
                           Layanan Antar
                        </h5>
                        <p>
                           Gak perlu repot lagi. Kini untuk pengambilan barang dapat diantar melalui kurir aplikasi online.
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="box ">
                     <div class="img-box">
                        
                         <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 48 48" viewBox="0 0 48 48" id="packet"><path d="M44.5,13.98c0-0.03-0.01-0.06-0.02-0.1c-0.01-0.03-0.01-0.07-0.03-0.1c0,0,0-0.01,0-0.01l-4-8C40.36,5.61,40.19,5.5,40,5.5
                        H8c-0.19,0-0.36,0.11-0.45,0.28l-4,8c0,0,0,0.01,0,0.01c-0.01,0.03-0.02,0.06-0.03,0.1c-0.01,0.03-0.02,0.06-0.02,0.1
                        c0,0.01,0,0.01,0,0.02v9v6v13c0,0.28,0.22,0.5,0.5,0.5h40c0.28,0,0.5-0.22,0.5-0.5V29v-6v-9C44.5,13.99,44.5,13.99,44.5,13.98z
                         M39.69,6.5l3.5,7H28.45l-0.7-7H39.69z M21.25,6.5h5.5l0.7,7h-6.9L21.25,6.5z M20.5,14.5h7v20.69l-3.28-1.64
                        c-0.07-0.04-0.15-0.05-0.22-0.05s-0.15,0.02-0.22,0.05l-3.28,1.64V14.5z M8.31,6.5h11.94l-0.7,7H4.81L8.31,6.5z M4.5,14.5h15v8h-15
                        V14.5z M4.5,23.5h15v5h-15V23.5z M43.5,41.5h-39v-12h15V36c0,0.17,0.09,0.33,0.24,0.43c0.15,0.09,0.33,0.1,0.49,0.02L24,34.56
                        l3.78,1.89c0.07,0.04,0.15,0.05,0.22,0.05c0.09,0,0.18-0.02,0.26-0.07c0.15-0.09,0.24-0.25,0.24-0.43v-6.5h15V41.5z M43.5,28.5h-15
                        v-5h15V28.5z M43.5,22.5h-15v-8h15V22.5z"></path></svg>
                     </div>
                     <div class="detail-box">
                        <h5>
                           Bahan Terbaik
                        </h5>
                        <p>
                           Kami menggunakan bahan baku yang selalu fresh untuk mempertahankan kualitas dan rasa.
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="box ">
                     <div class="img-box">
                         <svg id="_30_Premium" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg" data-name="30_Premium">
                           <g id="filled">
                              <path d="m252.92 300h3.08a124.245 124.245 0 1 0 -4.49-.09c.075.009.15.023.226.03.394.039.789.06 1.184.06zm-96.92-124a100 100 0 1 1 100 100 100.113 100.113 0 0 1 -100-100z" />
                              <path d="m447.445 387.635-80.4-80.4a171.682 171.682 0 0 0 60.955-131.235c0-94.841-77.159-172-172-172s-172 77.159-172 172c0 73.747 46.657 136.794 112 161.2v158.8c-.3 9.289 11.094 15.384 18.656 9.984l41.344-27.562 41.344 27.562c7.574 5.4 18.949-.7 18.656-9.984v-70.109l46.6 46.594c6.395 6.789 18.712 3.025 20.253-6.132l9.74-48.724 48.725-9.742c9.163-1.531 12.904-13.893 6.127-20.252zm-339.445-211.635c0-81.607 66.393-148 148-148s148 66.393 148 148-66.393 148-148 148-148-66.393-148-148zm154.656 278.016a12 12 0 0 0 -13.312 0l-29.344 19.562v-129.378a172.338 172.338 0 0 0 72 0v129.38zm117.381-58.353a12 12 0 0 0 -9.415 9.415l-6.913 34.58-47.709-47.709v-54.749a171.469 171.469 0 0 0 31.467-15.6l67.151 67.152z" />
                              <path d="m287.62 236.985c8.349 4.694 19.251-3.212 17.367-12.618l-5.841-35.145 25.384-25c7.049-6.5 2.89-19.3-6.634-20.415l-35.23-5.306-15.933-31.867c-4.009-8.713-17.457-8.711-21.466 0l-15.933 31.866-35.23 5.306c-9.526 1.119-13.681 13.911-6.634 20.415l25.384 25-5.841 35.145c-1.879 9.406 9 17.31 17.367 12.618l31.62-16.414zm-53-32.359 2.928-17.615a12 12 0 0 0 -3.417-10.516l-12.721-12.531 17.658-2.66a12 12 0 0 0 8.947-6.5l7.985-15.971 7.985 15.972a12 12 0 0 0 8.947 6.5l17.658 2.66-12.723 12.535a12 12 0 0 0 -3.417 10.516l2.928 17.615-15.849-8.231a12 12 0 0 0 -11.058 0z" />
                           </g>
                        </svg>
                     </div>
                     <div class="detail-box">
                        <h5>
                           Tersertifikasi Resmi
                        </h5>
                        <p>
                           Perusahaan dan produk kami tersertifikasi, melalui kepemilikan NIB (Nomor Induk Berwirausaha), P-IRT dan Halal.
                        </p>
                     </div>
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
