@props(['products'])

<div class="price-list">
    <h2 class="text-2xl font-bold mb-6 text-center">
        {{ app()->getLocale() === 'id' ? 'Daftar Produk' : 'Product List' }}
    </h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        @foreach($products as $product)
            <div class="border rounded-lg p-6 shadow-md flex flex-col items-center">
                <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" class="w-full h-40 object-cover mb-4 rounded">
                <h3 class="text-lg font-semibold mb-2">{{ $product['name'] }}</h3>
                <p class="text-sm text-gray-600 mb-4 text-center">{{ $product['description'] }}</p>
                <ul class="text-sm text-gray-700 mb-4">
                    @foreach($product['features'] as $feature)
                        <li>• {{ $feature }}</li>
                    @endforeach
                </ul>
                <div class="text-xl font-bold mb-4">
                    {{ $product['currency'] }}{{ number_format($product['price'], 0, ',', '.') }}
                </div>
                <form action="{{ route('checkout') }}" method="GET" class="w-full">
                    <input type="hidden" name="id" value="{{ $product['id'] }}">
                    <input type="hidden" name="name" value="{{ $product['name'] }}">
                    <input type="hidden" name="price" value="{{ $product['price'] }}">
                    <input type="hidden" name="category" value="{{ $product['category'] }}">
                    <button type="submit" class="bg-green-500 hover:bg-green-600 text-white py-2 px-4 rounded w-full">
                        {{ $product['cta'] }}
                    </button>
                </form>
            </div>
        @endforeach
    </div>
</div>
