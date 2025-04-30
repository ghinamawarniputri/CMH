@props(['products'])

<div class="price-list">
    <h2 class="price-list-title">
        {{ app()->getLocale() === 'id' ? 'Daftar Harga' : 'Product List' }}
    </h2>

    <div class="price-list-grid">
        @foreach($products as $product)
            <div class="price-card">
                <h3 class="price-card-name">{{ $product['name'] }}</h3>
                <ul class="price-card-features">
                    @foreach($product['features'] as $feature)
                    <li class="price-feature">{{ $feature }}</li>
                    @endforeach
                </ul>
                <div class="price-card-price">
                    {{ $product['currency'] }}{{ number_format($product['price'], 0, ',', '.') }}
                </div>
                <form action="{{ route('checkout') }}" method="GET" class="price-card-form">
                    <input type="hidden" name="id" value="{{ $product['id'] }}">
                    <input type="hidden" name="name" value="{{ $product['name'] }}">
                    <input type="hidden" name="price" value="{{ $product['price'] }}">
                    <input type="hidden" name="category" value="{{ $product['category'] }}">
                    <button type="submit" class="price-card-button">
                        {{ $product['cta'] }}
                    </button>
                </form>
            </div>
        @endforeach
    </div>
</div>
