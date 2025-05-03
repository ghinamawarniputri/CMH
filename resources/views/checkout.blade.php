@extends('layouts.app') {{-- Pastikan pakai layout utama. Ganti jika perlu --}}

@section('title', 'Checkout')

@section('meta')
<script type="text/javascript"
        src="https://app.stg.midtrans.com/snap/snap.js"
        data-client-key="{{ config('midtrans.client_key') }}">
</script>
@endsection

@section('content')
<div class="min-h-screen flex flex-col items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
    @if(isset($snapToken))
    {{-- If we have a snapToken, display payment confirmation --}}
    <div class="max-w-md w-full space-y-8 p-8 bg-white shadow-lg rounded-2xl">
        <div class="text-center">
            <h2 class="text-3xl font-extrabold text-gray-900 mb-4">
                {{ app()->getLocale() === 'id' ? 'Selesaikan Pembayaran' : 'Complete Payment' }}
            </h2>
            <p class="mt-2 text-sm text-gray-600">
                {{ app()->getLocale() === 'id' ? 'Klik tombol di bawah untuk melakukan pembayaran' : 'Click the button below to make your payment' }}
            </p>
        </div>

        <div class="bg-gray-100 rounded-lg p-6">
            <h3 class="text-xl font-semibold mb-4">{{ $order->nama }}</h3>
            <p class="text-gray-700 mb-2">
                <span class="font-semibold">{{ app()->getLocale() === 'id' ? 'Total' : 'Total' }}:</span> 
                Rp {{ number_format($order->total, 0, ',', '.') }}
            </p>
        </div>

        <div class="mt-6">
            <button id="pay-button" class="w-full py-3 px-4 border border-transparent rounded-lg shadow-sm text-black bg-green-600 hover:bg-green-700 focus:outline-none">
                Bayar Sekarang
            </button>
        </div>
        
        <div id="snap-container"></div>
    </div>
    
    @else
    {{-- Initial checkout form --}}
    <div class="max-w-md w-full space-y-8 p-8 bg-white shadow-lg rounded-2xl">
        <div class="text-center">
            <h2 class="text-3xl font-extrabold text-gray-900 mb-4">
                {{ app()->getLocale() === 'id' ? 'Konfirmasi Pesanan' : 'Order Confirmation' }}
            </h2>
            <p class="mt-2 text-sm text-gray-600">
                {{ app()->getLocale() === 'id' ? 'Periksa kembali rincian pesanan Anda sebelum melanjutkan ke pembayaran.' : 'Please review your order details before proceeding to payment.' }}
            </p>
        </div>

        {{-- Rincian Produk --}}
        <div class="bg-gray-100 rounded-lg p-6">
            <h3 class="text-xl font-semibold mb-4">{{ $product['name'] ?? 'Produk Tidak Diketahui' }}</h3>
            <p class="text-gray-700 mb-2">
                <span class="font-semibold">{{ app()->getLocale() === 'id' ? 'Kategori' : 'Category' }}:</span> {{ $product['category'] ?? '-' }}
            </p>
            <p class="text-gray-700 mb-4">
                <span class="font-semibold">{{ app()->getLocale() === 'id' ? 'Harga' : 'Price' }}:</span> Rp {{ number_format($product['price'] ?? 0, 0, ',', '.') }}
            </p>
        </div>

        {{-- Formulir Konfirmasi --}}
        <form action="{{ route('payment.process') }}" method="POST" class="mt-6 space-y-4">
            @csrf
            <input type="hidden" name="id" value="{{ $product['id'] }}">
            <input type="hidden" name="nama" value="{{ $product['name'] }}">
            <input type="hidden" name="total" value="{{ $product['price'] }}">
            <input type="hidden" name="category" value="{{ $product['category'] }}">
            <input type="hidden" name="quantity" value="1">
            
            {{-- Input Email --}}
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">
                    {{ app()->getLocale() === 'id' ? 'Alamat Email' : 'Email Address' }}
                </label>
                <input type="email" name="email" id="email" required
                    class="mt-1 p-2 block w-full rounded-md border-gray-300 shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
            </div>

            {{-- Input Nama Lengkap --}}
            <div>
                <label for="full_name" class="block text-sm font-medium text-gray-700">
                    {{ app()->getLocale() === 'id' ? 'Nama Lengkap' : 'Full Name' }}
                </label>
                <input type="text" name="nama" id="nama" required
                    class="mt-1 p-2 block w-full rounded-md border-gray-300 shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
            </div>

            {{-- Input Nomor WhatsApp / Telp --}}
            <div>
                <label for="phone" class="block text-sm font-medium text-gray-700">
                    {{ app()->getLocale() === 'id' ? 'No. WhatsApp / No. Telefon' : 'Phone Number' }}
                </label>
                <input type="text" name="phone" id="phone" required
                    class="mt-1 p-2 block w-full rounded-md border-gray-300 shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
            </div>

            {{-- Input Lirik Lagu --}}
            <div>
                <label for="lyrics" class="block text-sm font-medium text-gray-700">
                    {{ app()->getLocale() === 'id' ? 'Isi Lirik Lagu' : 'Song Lyrics' }}
                </label>
                <textarea name="lirik" id="lyrics" rows="4"
                    class="mt-1 p-2 block w-full rounded-md border-gray-300 shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm"
                    placeholder="{{ app()->getLocale() === 'id' ? 'Tulis lirik lagu di sini...' : 'Write your song lyrics here...' }}"></textarea>
            </div>

            {{-- Tombol Submit --}}
            <div class="space-y-2">
                <button type="submit" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-white bg-green-600 hover:bg-green-700 focus:outline-none">
                    {{ app()->getLocale() === 'id' ? 'Lanjutkan ke Pembayaran' : 'Proceed to Payment' }}
                </button>                

                <a href="{{ url()->previous() }}" class="w-full flex justify-center py-3 px-4 border border-gray-300 rounded-lg shadow-sm text-gray-700 bg-white hover:bg-gray-100 focus:outline-none">
                    {{ app()->getLocale() === 'id' ? 'Kembali' : 'Go Back' }}
                </a>
            </div>
        </form>
    </div>
    @endif
</div>
@endsection

@section('scripts')
@if(isset($snapToken))
<script type="text/javascript">
    // For example trigger on button clicked, or any time you need
    document.addEventListener('DOMContentLoaded', function() {
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function () {
            // Trigger snap popup using the transaction token
            window.snap.pay('{{ $snapToken }}', {
                onSuccess: function (result) {
                    /* You may add your own implementation here */
                    alert("{{ app()->getLocale() === 'id' ? 'Pembayaran berhasil!' : 'Payment success!' }}");
                    console.log(result);
                    window.location.href = "/"; // Redirect to homepage after successful payment
                },
                onPending: function (result) {
                    /* You may add your own implementation here */
                    alert("{{ app()->getLocale() === 'id' ? 'Menunggu pembayaran Anda!' : 'Waiting for your payment!' }}");
                    console.log(result);
                },
                onError: function (result) {
                    /* You may add your own implementation here */
                    alert("{{ app()->getLocale() === 'id' ? 'Pembayaran gagal!' : 'Payment failed!' }}");
                    console.log(result);
                },
                onClose: function () {
                    /* You may add your own implementation here */
                    alert('{{ app()->getLocale() === "id" ? "Anda menutup popup tanpa menyelesaikan pembayaran" : "You closed the popup without finishing the payment" }}');
                }
            });
        });
        
        // Automatically trigger payment popup
        setTimeout(function() {
            payButton.click();
        }, 1000);
    });
</script>
@endif
@endsection