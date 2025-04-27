@extends('layouts.app')

@section('title', 'CreativeMusicHub - Buat Musik dengan Efek')

@section('content')
<div class="effects-page">
    <div class="product-wrapper">
        <div class="container music-container">
            <div class="row d-flex flex-column flex-md-row align-items-center">
                <div class="col-md-6 image-section">
                    <div class="image-overlay">
                        <img src="{{ asset('your-image-url.jpg') }}" alt="Inspirasi Musik dengan Efek" class="music-image img-fluid" />
                        <div class="overlay-content">
                            <h2 class="song-title">Judul Lagu dengan Efek</h2>
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
                        <h3 class="inspiration-title">Inspirasi Musik dengan Efek 🎧</h3>
                        <p class="inspiration-text">
                            Dengan CMH.AI, kamu bisa menambahkan efek suara untuk memperkaya karya musikmu.
                        </p>
                        <h4 class="ai-title">Judul AI</h4>
                        <div class="effect-input-container">
                            <textarea class="form-effect effect-input" placeholder="Masukkan efek yang diinginkan..."></textarea>
                            <button class="btn-effect btn-primary create-btn">Buat dengan Efek</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Pakai COMPONENT di sini --}}
        <x-product-desc
            title="Buat Musik dengan Efek"
            description1="Dengan CMH.AI, kamu hanya perlu mengunggah lirik dan pilih efek yang diinginkan untuk mendapatkan musik yang semakin memukau."
            description2="Ciptakan karya musik yang lebih hidup dengan berbagai macam efek suara dan elemen kreatif lainnya."
            description3="Mulai dari Rp. 250.000, CMH.AI menawarkan solusi cepat dan mudah untuk menghasilkan musik dengan efek yang sesuai dengan kebutuhanmu."
            image="product-desc2.jpg"
            imageAlt="Gambar Produk Efek"
        />

        <div class="container">
            <div class="row">
                <div class="col">
                    {{-- Komponen How It Works --}}
                    <x-how-it-works :steps="[
                        [
                            'text' => app()->getLocale() === 'id'
                                ? 'Unggah rekaman atau lirik dan pilih efek yang diinginkan.'
                                : 'Upload your recording or lyrics and select the desired effects.',
                            'image' => asset('images/howItWorks1.png'),
                        ],
                        [
                            'text' => app()->getLocale() === 'id'
                                ? 'Pilih efek suara dan gaya musik yang sesuai dengan tema karya Anda.'
                                : 'Choose the sound effects and music style that fit your project.',
                            'image' => asset('images/howItWorks2.png'),
                        ],
                        [
                            'text' => app()->getLocale() === 'id'
                                ? 'Biarkan AI kami memproses dan menambahkan efek pada musik Anda.'
                                : 'Let our AI process and add the effects to your music.',
                            'image' => asset('images/howItWorks3.png'),
                        ],
                        [
                            'text' => app()->getLocale() === 'id'
                                ? 'Unduh lagu dengan efek yang sudah jadi dan nikmati hasilnya!'
                                : 'Download your song with the added effects and enjoy the result!',
                            'image' => asset('images/howItWorks4.png'),
                        ],
                    ]" />
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <x-price-list-product :products="[
                        [
                            'id' => 2,
                            'image' => asset('images/catalog2.jpg'),
                            'name' => 'Buat Musik dengan Efek',
                            'description' => 'Tambah efek dan suara untuk memperkaya musikmu.',
                            'cta' => 'Pesan Sekarang',
                            'rating' => 'Telah dipesan sebanyak: ',
                            'currency' => 'Rp',
                            'price' => 65000,
                            'features' => [
                                'Revisi Tidak Terbatas',
                                'Jenis file WAV & MP3',
                                'Durasi maksimal. 5 menit',
                            ],
                            'category' => 'effect',
                        ],
                    ]" />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    // Fungsi untuk membuat scroll ke pricelist
    document.querySelector('.create-btn').addEventListener('click', function() {
        var targetElement = document.querySelector('.price-list-container');
        if (targetElement) {
            targetElement.scrollIntoView({ behavior: 'smooth' });
        }
    });
</script>
@endpush
