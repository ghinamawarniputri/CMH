@extends('layouts.app')

@section('title', 'CreativeMusicHub')

<<<<<<< HEAD=======>>>>>>> 856e3169e80346c81ecb8a8969cf45b31a528c80
    @section('content')
        <section class="hero_section">
            <div class="video_bg">
                <video autoplay muted loop id="heroVideo">
                    <source src="{{ asset('videos/video.mp4') }}" type="video/mp4">
                </video>
            </div>
            <div class="hero_content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 mx-auto text-center">
                            <h1 class="hero_title">
                                Ciptakan <br>
                                Musikmu Dalam <br>
                                Hitungan <span class="highlight">Detik</span>
                                <span class="sparkle">✨</span>
                            </h1>
                            <p class="hero_text">
                                Jadikan inspirasimu sebuah mahakarya dengan AI canggih.
                                Tanpa perlu studio mahal, cukup unggah ide musikmu, dan
                                biarkan AI kami menyulapnya menjadi melodi artistik serta
                                aransemen profesional dalam hitungan menit.
                            </p>
                            <a href="#" class="cta_button">
                                COBA SEKARANG
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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
                <!-- product cards section -->
                <div class="grid">
                    <div class="product-card p-3 border rounded shadow-sm h-100">
                        <div class="image-container">
                            <img src="{{ asset('img/msc.lyrc.jpg') }}" alt="Buat Musik melalui Lyric"
                                class="w-100 mb-2 rounded" style="height: 200px; object-fit: cover;">
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

                            {{-- Checkout Form --}}
                            <form action="{{ route('checkout') }}" method="GET">
                                <input type="hidden" name="id" value="1">
                                <input type="hidden" name="name" value="Buat Musik melalui Lyric">
                                <input type="hidden" name="category" value="lyric">
                                <input type="hidden" name="price" value="55000">
                                <button type="submit"
                                    class="learn-more-btn w-full bg-[#FF007F] hover:bg-pink-600 text-white py-2 rounded mt-2">
                                    Pesan Sekarang →
                                </button>
                            </form>
                        </div>
                    </div>

                    <div class="product-card p-3 border rounded shadow-sm h-100">
                        <div class="image-container">
                            <img src="{{ asset('img/msc.ins.jpg') }}" alt="Buat Musik Instrumen" class="w-100 mb-2 rounded"
                                style="height: 200px; object-fit: cover;">
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

                            {{-- Checkout Form --}}
                            <form action="{{ route('checkout') }}" method="GET">
                                <input type="hidden" name="id" value="2">
                                <input type="hidden" name="name" value="Buat Musik Instrumen">
                                <input type="hidden" name="category" value="instrument">
                                <input type="hidden" name="price" value="55000">
                                <button type="submit"
                                    class="learn-more-btn w-full bg-[#FF007F] hover:bg-pink-600 text-white py-2 rounded mt-2">
                                    Pesan Sekarang →
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="product-card p-3 border rounded shadow-sm h-100">
                        <div class="image-container">
                            <img src="{{ asset('img/s.effct.jpg') }}" alt="Buat Sound Effect" class="w-100 mb-2 rounded"
                                style="height: 200px; object-fit: cover;">
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

                            {{-- Checkout Form --}}
                            <form action="{{ route('checkout') }}" method="GET">
                                <input type="hidden" name="id" value="3">
                                <input type="hidden" name="name" value="Buat Sound Effect">
                                <input type="hidden" name="category" value="effect">
                                <input type="hidden" name="price" value="55000">
                                <button type="submit"
                                    class="learn-more-btn w-full bg-[#FF007F] hover:bg-pink-600 text-white py-2 rounded mt-2">
                                    Pesan Sekarang →
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- end product cards section -->
            </div>
        </section>
        <!-- end why section -->

        <!-- portfolios section -->
        <section class="portfolio-section">
            <div class="container position-relative">
                <h2 class="section-title">
                    <img src="{{ asset('img/logo-portofolio.svg') }}" alt="Portfolio Icon">
                    <span class="highlight">Portofolio</span>
                    <img src="{{ asset('img/logo-portofolio.svg') }}" alt="Portfolio Icon">
                </h2>
                <!-- Tombol navigasi dipindah ke luar swiper -->
                <div class="custom-swiper-button-prev">
                    <i class="fas fa-chevron-left"></i>
                </div>
                <div class="custom-swiper-button-next">
                    <i class="fas fa-chevron-right"></i>
                </div>

                <div class="swiper portfolioSwiper">
                    <div class="swiper-wrapper">
                        @foreach ($portfolios as $item)
                            <div class="swiper-slide">
                                <div class="portfolio-card">
                                    <h3 class="portfolio-title">{{ strtoupper($item->name) }}</h3>
                                    <p class="portfolio-genre">{{ $item->genre }}</p>
                                    <iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay"
                                        src="https://w.soundcloud.com/player/?url={{ urlencode($item->link) }}&color=%23ff007f&auto_play=false&hide_related=true&show_comments=false&show_user=true&show_reposts=false&show_teaser=false">
                                    </iframe>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const swiper = new Swiper('.portfolioSwiper', {
                    slidesPerView: 3,
                    spaceBetween: 30,
                    navigation: {
                        nextEl: '.custom-swiper-button-next',
                        prevEl: '.custom-swiper-button-prev',
                    },
                    breakpoints: {
                        320: {
                            slidesPerView: 1,
                            spaceBetween: 20
                        },
                        768: {
                            slidesPerView: 2,
                            spaceBetween: 30
                        },
                        1024: {
                            slidesPerView: 3,
                            spaceBetween: 30
                        }
                    }
                });
            });
        </script>
        <!-- end portfolios section -->

    @endsection