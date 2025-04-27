@extends('layouts.app')

@section('content')

    <div class="lyrics-page">
        <div class="product-wrapper">
            <div class="container music-container">
                <div class="row d-flex flex-column flex-md-row align-items-center">
                    <div class="col-md-6 image-section">
                        <div class="image-overlay">
                            <img src="your-image-url.jpg" alt="Inspirasi Musik" class="music-image img-fluid" />
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
        </div>

        <div class="container">
            <div class="row text-center pt-5">
                <div class="col py-5">
                    <p>Komponen deskripsi produk akan ada di sini</p>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col">
                    <p>Komponen cara kerja akan ada di sini</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p>Komponen daftar harga akan ada di sini</p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      // Fungsi scroll ke pricelist
      document.querySelector('.create-btn').addEventListener('click', function() {
        var targetElement = document.querySelector('.price-list-container'); // Ganti dengan selector yang sesuai
        if (targetElement) {
            targetElement.scrollIntoView({ behavior: 'smooth' });
        }
      });
    </script>
@endsection