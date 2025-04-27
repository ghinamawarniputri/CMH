@extends('layouts.app')

@section('title', 'CreativeMusicHub - Sound Effect')

@section('content')
<div class="produk-efek">
    <div class="efek-hero">
        <div class="efek-container">
            <div class="efek-content">
                <h1 class="efek-title">Buat <span class="efek-highlight">Sound Effect</span> yang Meningkatkan Karya Musikmu <span class="efek-icon">🎧</span></h1>
                
                <div class="efek-steps">
                    <div class="step-item">
                        <img src="{{ asset('img/pict1.png') }}" alt="Buat" class="step-image">
                        <h3>BUAT</h3>
                    </div>
                    <div class="step-item">
                        <img src="{{ asset('img/pict2.png') }}" alt="Proses" class="step-image">
                        <h3>PROSES</h3>
                    </div>
                    <div class="step-item">
                        <img src="{{ asset('img/pict3.png') }}" alt="Hasil" class="step-image">
                        <h3>HASIL</h3>
                    </div>
                </div>

                <button class="efek-btn">BUAT SEKARANG</button>
            </div>
        </div>
    </div>
        {{-- Pakai COMPONENT di sini --}}
        <x-product-desc
            title="Buat Musik dengan Efek"
            description1="Dengan CMH.AI, kamu hanya perlu mengunggah lirik dan pilih efek yang diinginkan untuk mendapatkan musik yang semakin memukau."
            description2="Ciptakan karya musik yang lebih hidup dengan berbagai macam efek suara dan elemen kreatif lainnya."
            description3="Mulai dari Rp. 250.000, CMH.AI menawarkan solusi cepat dan mudah untuk menghasilkan musik dengan efek yang sesuai dengan kebutuhanmu."
            image="img/desc3.jpg"
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
                            'image' => asset('img/step1.png'),
                        ],
                        [
                            'text' => app()->getLocale() === 'id'
                                ? 'Pilih efek suara dan gaya musik yang sesuai dengan tema karya Anda.'
                                : 'Choose the sound effects and music style that fit your project.',
                            'image' => asset('img/step2.png'),
                        ],
                        [
                            'text' => app()->getLocale() === 'id'
                                ? 'Biarkan AI kami memproses dan menambahkan efek pada musik Anda.'
                                : 'Let our AI process and add the effects to your music.',
                            'image' => asset('img/step3.png'),
                        ],
                        [
                            'text' => app()->getLocale() === 'id'
                                ? 'Unduh lagu dengan efek yang sudah jadi dan nikmati hasilnya!'
                                : 'Download your song with the added effects and enjoy the result!',
                            'image' => asset('img/step4.png'),
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
