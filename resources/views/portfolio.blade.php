@extends('layouts.app')
@section('title', 'Portfolio')

@section('content')
<style>
.container.py-5 {
    padding-top: 180px !important;
    background-color: #0e1117;
    min-height: 100vh;
}

h1.text-center {
    color: var(--heading);
    font-family: "Rajdhani", sans-serif;
    font-size: 2.5rem;
    font-weight: bold;
    margin-bottom: 2rem;
}
</style>

<section class="container py-5">
    <h1 class="text-center mb-4">🎼 Portfolio 🎼</h1>

    <div class="d-flex flex-wrap justify-content-center mb-4 gap-2">
        @php
            $genres = ['All', 'Accoustic', 'Dubstep', 'Jazz', 'Pop', 'Progressive', 'Sundanese'];
        @endphp
        @foreach ($genres as $genre)
            <button class="btn btn-outline-dark filter-btn" data-genre="{{ $genre }}">
                {{ $genre }}
            </button>
        @endforeach
    </div>

    <div class="row" id="portfolio-list">
        @foreach ($portfolios as $item)
            <div class="col-md-4 mb-4 portfolio-item" data-genre="{{ $item->genre }}">
                <div class="card bg-dark text-light h-100">
                    <div class="card-body">
                        <h5 class="card-title text-uppercase fw-bold">{{ $item->name }}</h5>
                        <p class="card-text"><strong>Genre:</strong> {{ $item->genre }}</p>
                        <div class="soundcloud-player">
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
            </div>
        @endforeach
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const buttons = document.querySelectorAll('.filter-btn');
        const items = document.querySelectorAll('.portfolio-item');

        buttons.forEach(btn => {
            btn.addEventListener('click', () => {
                const genre = btn.getAttribute('data-genre');
                items.forEach(item => {
                    if (genre === 'All' || item.getAttribute('data-genre') === genre) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });
    });
</script>
@endsection
