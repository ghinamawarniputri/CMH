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
