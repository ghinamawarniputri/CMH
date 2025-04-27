@extends('layouts.app')

@section('title', 'CreativeMusicHub - Buat Musik Instrumen')

@section('content')
<div class="instrument-page">
    <div class="product-wrapper">
        <div class="container music-container">
            <div class="row d-flex flex-column flex-md-row align-items-center">
                <div class="col-md-6 image-section">
                    <div class="image-overlay">
                        <img src="{{ asset('images/catalogImage2.jpg') }}" alt="Instrumen Musik" class="music-image img-fluid" />
                        <div class="overlay-content">
                            <h2 class="song-title">Buat Musik dari Instrumen</h2>
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
                            Dengan CMH.AI, kamu hanya perlu memilih instrumen yang diinginkan dan biarkan AI kami menciptakan musik berkualitas tinggi untukmu.
                        </p>
                        <h4 class="ai-title">AI Musik</h4>
                        <div class="lyric-input-container">
                            <textarea class="form-lyric lyric-input" placeholder="Masukkan instrumen yang diinginkan..."></textarea>
                            <button class="btn-lyric btn-primary create-btn">Buat</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Pakai COMPONENT di sini --}}
        <x-product-desc
            title="Buat Musik dari Instrumen"
            description1="Dengan CMH.AI, kamu hanya perlu memilih instrumen yang diinginkan dan biarkan AI kami menciptakan musik berkualitas tinggi untukmu."
            description2="Tidak perlu keterampilan komposisi atau pengalaman dalam musik untuk membuat karya yang menakjubkan. Nikmati berbagai pilihan genre dan gaya musik yang bisa disesuaikan dengan kebutuhan kamu, apakah untuk video, iklan, atau proyek kreatif lainnya."
            description3="Mulai dari Rp. 200.000, Musik.AI menawarkan solusi cepat dan mudah untuk menghasilkan musik original tanpa batasan. Pilih instrumen, tentukan suasana hati, dan biarkan AI kami bekerja. Dalam waktu singkat, kamu akan memiliki lagu lengkap dengan instrumen yang siap digunakan."
            image="productDesc2.jpg"
            imageAlt="Gambar Produk Instrumen"
        />

        <div class="container">
            <div class="row">
                <div class="col">
                    {{-- Komponen How It Works --}}
                    <x-how-it-works :steps="[
                        ['text' => app()->getLocale() === 'id' ? 'Unggah rekaman permainan instrumen Anda.' : 'Upload your instrument recording.', 'image' => asset('images/howItWorks1.png')],
                        ['text' => app()->getLocale() === 'id' ? 'Pilih suasana hati dan gaya untuk lagu Anda.' : 'Choose the mood and style for your song.', 'image' => asset('images/howItWorks2.png')],
                        ['text' => app()->getLocale() === 'id' ? 'AI kami akan memproses rekaman dan membuat aransemen lengkap.' : 'Our AI will process the recording and create a full arrangement.', 'image' => asset('images/howItWorks3.png')],
                        ['text' => app()->getLocale() === 'id' ? 'Unduh lagu akhir dan nikmati kreasi Anda!' : 'Download the final song and enjoy your creation!', 'image' => asset('images/howItWorks4.png')]
                    ]" />
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <x-price-list-product :products="[
                        [
                            'id' => 2,
                            'image' => asset('images/catalogImage2.jpg'),
                            'name' => 'Buat Musik Instrumen',
                            'description' => 'Ciptakan melodi instrumental profesional.',
                            'cta' => 'Pesan Sekarang',
                            'rating' => 'Telah dipesan sebanyak: ',
                            'currency' => 'Rp',
                            'price' => 55000,
                            'features' => ['Revisi Tidak Terbatas', 'jenis file WAV & MP3', 'Durasi maksimal. 5 menit'],
                            'category' => 'instrument',
                        ]
                    ]" />
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
