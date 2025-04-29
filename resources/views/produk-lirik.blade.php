@extends('layouts.app')

@section('title', 'CreativeMusicHub - Buat Musik dengan Lirik')

@section('content')
<div class="produk-lirik">
    <div class="instrumen-hero">
        <div class="instrumen-container">
            <div class="instrumen-content">
                <h1 class="instrumen-title">
                    "Ekspresikan Perasaanmu Lewat <span class="instrumen-highlight">Lirik</span> dan <span class="instrumen-highlight">Musik</span> Buatanmu" <span class="instrumen-icon">🎶</span>
                </h1>

                <p class="instrumen-text">
                    "Dengar suara hujan, lihat matahari terbit, rasakan detak jantungmu. Setiap lagu besar dimulai dari satu kata sederhana. Tulis apa yang kamu rasakan. Musik ada di mana-mana."
                </p>


                <button class="instrumen-btn">Unduh Musik Anda</button>

            </div>
        </div>
    </div>
</div>


        <x-product-desc
            title="Buat Musik dari Lirik"
            description1="Dengan CMH.AI, kamu hanya perlu mengunggah lirik untuk mendapatkan musik yang sesuai dengan tema dan mood yang kamu inginkan."
            description2="Tidak perlu repot belajar produksi musik atau mencari musisi. Nikmati berbagai pilihan genre dan aransemen yang disesuaikan dengan lirikmu, apakah untuk video, podcast, atau proyek pribadi."
            description3="Mulai dari Rp. 150.000, CMH.AI menawarkan solusi cepat dan mudah untuk menghasilkan musik berkualitas tinggi. Pilih genre yang diinginkan, unggah lirik, dan biarkan AI kami bekerja. Dalam waktu singkat, kamu akan memiliki musik yang sempurna untuk melengkapi karya kreatifmu."
            image="img/desc1.jpg"
            imageAlt="Gambar Produk Lirik"
        />

        <div class="container">
            <div class="row">
                <div class="col">
                    <x-how-it-works :steps="[
                        ['text' => app()->getLocale() === 'id' ? 'Unggah lirik Anda.' : 'Upload your lyrics.', 'image' => asset('img/step1.png')],
                        ['text' => app()->getLocale() === 'id' ? 'Pilih genre dan gaya untuk lagu Anda.' : 'Choose the genre and style for your song.', 'image' => asset('img/step2.png')],
                        ['text' => app()->getLocale() === 'id' ? 'AI kami akan memproses lirik dan membuat musik yang sesuai.' : 'Our AI will process the lyrics and create matching music.', 'image' => asset('img/step3.png')],
                        ['text' => app()->getLocale() === 'id' ? 'Unduh lagu akhir dan nikmati kreasi Anda!' : 'Download the final song and enjoy your creation!', 'image' => asset('img/step4.png')]
                    ]" />
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <x-price-list-product :products="[
                        [
                            'id' => 1,
                            'image' => asset('images/catalogImage1.jpg'),
                            'name' => 'Buat Musik dari Lirik',
                            'description' => 'Ubah lirikmu menjadi lagu yang indah.',
                            'cta' => 'Pesan Sekarang',
                            'rating' => 'Telah dipesan sebanyak: ',
                            'currency' => 'Rp',
                            'price' => 45000,
                            'features' => ['Revisi Tidak Terbatas', 'jenis file WAV & MP3', 'Durasi maksimal. 5 menit'],
                            'category' => 'lyric',
                        ]
                    ]" />
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection

@push('scripts')
<script>
    document.querySelector('.create-btn').addEventListener('click', function() {
        var targetElement = document.querySelector('.price-list-container');
        if (targetElement) {
            targetElement.scrollIntoView({ behavior: 'smooth' });
        }
    });
</script>
@endpush
