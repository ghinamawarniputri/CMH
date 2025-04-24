@extends('layouts.app') <!-- Update with your layout -->
@section('title', 'Portfolio')

@section('content')
<section class="container py-5">
    <h1 class="text-center mb-4">🎼 Portfolio 🎼</h1>

    <div class="row mb-4 text-center">
        @php
            $genres = ['All', 'Accoustic', 'Dubstep', 'Jazz', 'Pop', 'Progressive', 'Sundanese'];
        @endphp
        @foreach ($genres as $genre)
            <div class="col">
                <button class="btn btn-outline-dark m-1 filter-btn" data-genre="{{ $genre }}">{{ $genre }}</button>
            </div>
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
