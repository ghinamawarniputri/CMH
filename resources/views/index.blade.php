@extends('layouts.app')

@section('content')
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
    </div>
</section>
<!-- end slider section -->

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
            <!-- product cards section -->
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
            <!-- end product cards section -->
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
            <!-- carousel content section -->
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
            <!-- end of carousel content section -->
        </div>
    </div>
</section>
<!-- end portfolios section -->
@endsection
