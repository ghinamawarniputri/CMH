@extends('layouts.app')

@section('title', 'CreativeMusicHub - Buat Musik Instrumen')

@section('content')
<div class="produk-instrumen">
<div class="instrumen-hero">
    <div class="instrumen-container">
        <div class="instrumen-content">
            <h1 class="instrumen-title">"Temukan Kebebasan Berkarya<br>Melalui <span class="instrumen-highlight">Instrumen</span><br>Buatanmu" <span class="instrumen-icon">🎸</span></h1>

            <p class="instrumen-text">
                "Jadikan ide musikmu lebih hidup dengan instrumen buatan tangan yang bisa disesuaikan. Desain, kustomisasi, dan mainkan semuanya ada di sini."
            </p>

            <button class="instrumen-btn">MULAI SEKARANG</button>
        </div>
    </div>
</div>

        {{-- Pakai COMPONENT di sini --}}
        <x-product-desc
            title="Buat Musik dari Instrumen"
            description1="Dengan CMH.AI, kamu hanya perlu memilih instrumen yang diinginkan dan biarkan AI kami menciptakan musik berkualitas tinggi untukmu."
            description2="Tidak perlu keterampilan komposisi atau pengalaman dalam musik untuk membuat karya yang menakjubkan. Nikmati berbagai pilihan genre dan gaya musik yang bisa disesuaikan dengan kebutuhan kamu, apakah untuk video, iklan, atau proyek kreatif lainnya."
            description3="Mulai dari Rp. 200.000, Musik.AI menawarkan solusi cepat dan mudah untuk menghasilkan musik original tanpa batasan. Pilih instrumen, tentukan suasana hati, dan biarkan AI kami bekerja. Dalam waktu singkat, kamu akan memiliki lagu lengkap dengan instrumen yang siap digunakan."
            image="img/desc2.jpg"
            imageAlt="Gambar Produk Instrumen"
        />

        <div class="container">
            <div class="row">
                <div class="col">
                    <x-how-it-works :steps="[
                        ['text' => app()->getLocale() === 'id' ? 'Unggah rekaman permainan instrumen Anda.' : 'Upload your instrument recording.', 'image' => asset('img/step1.png')],
                        ['text' => app()->getLocale() === 'id' ? 'Pilih suasana hati dan gaya untuk lagu Anda.' : 'Choose the mood and style for your song.', 'image' => asset('img/step2.png')],
                        ['text' => app()->getLocale() === 'id' ? 'AI kami akan memproses rekaman dan membuat aransemen lengkap.' : 'Our AI will process the recording and create a full arrangement.', 'image' => asset('img/step3.png')],
                        ['text' => app()->getLocale() === 'id' ? 'Unduh lagu akhir dan nikmati kreasi Anda!' : 'Download the final song and enjoy your creation!', 'image' => asset('img/step4.png')]
                    ]" />
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <x-price-list-product :products="[
                        [
                            'id' => 2,
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
