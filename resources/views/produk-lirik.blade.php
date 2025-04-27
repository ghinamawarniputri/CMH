@extends('layouts.app')

@section('title', 'CreativeMusicHub - Buat Musik Melalui Lirik')

@section('content')
<div class="lyrics-page">
    <div class="product-wrapper">
        <div class="container music-container">
            <div class="row d-flex flex-column flex-md-row align-items-center">
                <div class="col-md-6 image-section">
                    <div class="image-overlay">
                        <img src="{{ asset('your-image-url.jpg') }}" alt="Inspirasi Musik" class="music-image img-fluid" />
                        <div class="overlay-content">
                            <h2 class="song-title">Judul Lagu</h2>
                            <div class="music-controls">
                                <button class="btn btn-outline-light">Putar</button>
                                <button class="btn btn-outline-light">Jeda</button>
                                <button class="btn btn-outline-light">Berhenti</button>
                            </div>
                            <a href="#" class="btn btn-success download-btn">Unduh</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 music-section">
                    <div class="music-content">
                        <h3 class="inspiration-title">Inspirasi Musik ✍️</h3>
                        <p class="inspiration-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit...
                        </p>
                        <h4 class="ai-title">Judul AI</h4>
                        <div class="lyric-input-container">
                            <textarea class="form-lyric lyric-input" placeholder="Masukkan lirik Anda..."></textarea>
                            <button class="btn-lyric btn-primary create-btn">Buat</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Pakai COMPONENT di sini --}}
        <x-product-desc
            title="Buat Musik dari Lirik"
            description1="Dengan CMH.AI, kamu hanya perlu mengunggah lirik untuk mendapatkan musik yang sesuai dengan tema dan mood yang kamu inginkan."
            description2="Tidak perlu repot belajar produksi musik atau mencari musisi. Nikmati berbagai pilihan genre dan aransemen yang disesuaikan dengan lirikmu."
            description3="Mulai dari Rp. 150.000, CMH.AI menawarkan solusi cepat dan mudah untuk menghasilkan musik berkualitas tinggi."
            image="product-desc1.jpg"
            imageAlt="Gambar Produk Lirik"
        />

        <div class="container">
            <div class="row">
                <div class="col">
                    {{-- Komponen How It Works --}}
            <x-how-it-works />
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p>Komponen daftar harga akan ada di sini</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    // fungsi untuk membuat scroll ke pricelist
    document.querySelector('.create-btn').addEventListener('click', function() {
        var targetElement = document.querySelector('.price-list-container');
        if (targetElement) {
            targetElement.scrollIntoView({ behavior: 'smooth' });
        }
    });
</script>
@endpush
