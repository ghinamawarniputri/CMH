<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Lirik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="your-custom-styles.css" rel="stylesheet"> <style>
      .product-wrapper {
        padding-top: 20px;
        padding-bottom: 20px;
      }
      .music-container {
        /* Tambahkan gaya sesuai kebutuhan, misalnya: */
        background-color: #f8f9fa;
        padding: 20px;
        border-radius: 10px;
      }
      .image-section {
        position: relative; /* Untuk memposisikan overlay */
        margin-bottom: 20px; /* Spasi di bawah gambar di tampilan mobile */
      }
      .music-image {
        width: 100%;
        border-radius: 10px;
      }
      .image-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5); /* Overlay gelap */
        border-radius: 10px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        opacity: 0;
        transition: opacity 0.3s ease;
      }
      .image-overlay:hover {
        opacity: 1;
      }
      .overlay-content {
        text-align: center;
        color: white;
      }
      .song-title {
        font-size: 24px;
        margin-bottom: 10px;
      }
      .music-controls {
        display: flex;
        gap: 10px;
        margin-bottom: 15px;
      }
      .music-controls button {
        /* Gaya tombol, misalnya: */
        padding: 8px 16px;
        border-radius: 5px;
        background-color: rgba(255, 255, 255, 0.7);
        color: #333;
        border: none;
        cursor: pointer;
      }
      .download-btn {
        background-color: #28a745 !important;
        color: white !important;
        padding: 10px 20px;
        border-radius: 5px;
        text-decoration: none;
      }
      .music-section {
        /* Gaya bagian teks, misalnya: */
        padding-left: 20px;
        padding-right: 20px;
      }
      .inspiration-title {
        font-size: 20px;
        color: #0c4a6e;
      }
      .inspiration-text {
        font-size: 16px;
        line-height: 1.5;
        color: #374151;
      }
      .ai-title{
        font-size: 18px;
        color: #0c4a6e;
      }
      .lyric-input-container{
        display: flex;
        flex-direction: column;
        gap: 10px;
        margin-top: 20px
      }
      .form-lyric{
        display: block;
        width: 100%;
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #212529;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        border-radius: 0.375rem;
        transition: border-color 0.15s ease-in-out, shadow-sm 0.15s ease-in-out;
        min-height: 120px;
        resize: vertical;
      }
      .create-btn{
        padding: 0.375rem 0.75rem;
        border-radius: 0.375rem;
        background-color: #007bff;
        color: #fff;
        cursor: pointer;
        border: 1px solid #007bff;
      }
      .text-center{
        text-align: center;
      }
      .py-5{
        padding-top: 3rem!important;
        padding-bottom: 3rem!important;
      }
      .row{
        display: flex;
        flex-wrap: wrap;
        margin-top: calc(var(--bs-gutter-y) * -1);
        margin-right: calc(var(--bs-gutter-x) / -2);
        margin-left: calc(var(--bs-gutter-x) / -2);
      }
      .col{
        flex: 1 0 auto;
        width: 100%;
      }
      @media (min-width: 768px) {
        .col-md-6 {
            flex: 0 0 auto;
            width: 50%;
        }
        .music-section {
            padding-left: 0;
        }
      }
    </style>
</head>
<body>
    <div class="lyrics-page">
        <div class="product-wrapper">
            <div class="container music-container">
                <div class="row d-flex flex-column flex-md-row align-items-center">
                    <div class="col-md-6 image-section">
                        <div class="image-overlay">
                            <img
                                src="your-image-url.jpg"  alt="Inspirasi Musik"
                                class="music-image img-fluid"
                            />
                            <div class="overlay-content">
                                <h2 class="song-title">Judul Lagu</h2>  <div class="music-controls">
                                    <button class="btn btn-outline-light">Putar</button>  <button class="btn btn-outline-light">Jeda</button>  <button class="btn btn-outline-light">Berhenti</button>  </div>
                                <a href="#" class="btn btn-success download-btn">Unduh</a>  </div>
                        </div>
                    </div>
                    <div class="col-md-6 music-section">
                        <div class="music-content">
                            <h3 class="inspiration-title">Inspirasi Musik ✍️</h3>  <p class="inspiration-text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit...  </p>
                            <h4 class="ai-title">Judul AI</h4>
                            <div class="lyric-input-container">
                                <textarea
                                    class="form-lyric lyric-input"
                                    placeholder="Masukkan lirik Anda..."  ></textarea>
                                <button
                                    class="btn-lyric btn-primary create-btn"
                                >
                                    Buat
                                </button>
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
      //fungsi untuk membuat scroll ke pricelist
      document.querySelector('.create-btn').addEventListener('click', function() {
        // Cari elemen target (misalnya, div pricelist)
        var targetElement = document.querySelector('.price-list-container'); // Ganti .price-list-container dengan selector yang sesuai
        if (targetElement) {
            // Lakukan scroll ke elemen target
            targetElement.scrollIntoView({ behavior: 'smooth' });
        }
      });
    </script>
</body>
</html>
