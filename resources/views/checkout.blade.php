@extends('layouts.app')

@section('title', 'Checkout')

@section('meta')
<script type="text/javascript"
        src="https://app.stg.midtrans.com/snap/snap.js"
        data-client-key="{{ config('midtrans.client_key') }}">
</script>
@endsection

@section('content')
<div class="min-h-screen flex flex-col items-center justify-center bg-[#0E1117] py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full bg-[#0E1117] border border-white rounded-2xl shadow-lg px-6 py-8">
        <div class="text-center text-white mb-6">
            <h2 class="text-3xl font-extrabold mb-4">
                {{ app()->getLocale() === 'id' ? 'Konfirmasi Pesanan' : 'Order Confirmation' }}
            </h2>
            <p class="text-sm text-gray-300">
                {{ app()->getLocale() === 'id' ? 'Periksa kembali rincian pesanan Anda sebelum melanjutkan ke pembayaran.' : 'Please review your order details before proceeding to payment.' }}
            </p>
        </div>

        {{-- Product Details --}}
        <div class="bg-gray-800 rounded-lg p-4 text-white mb-6">
            <h3 class="text-xl font-semibold mb-2">{{ $product['name'] ?? 'Produk Tidak Diketahui' }}</h3>
            <p class="mb-1"><strong>{{ app()->getLocale() === 'id' ? 'Kategori' : 'Category' }}:</strong> {{ $product['category'] ?? '-' }}</p>
            <p><strong>{{ app()->getLocale() === 'id' ? 'Harga' : 'Price' }}:</strong> Rp {{ number_format($product['price'] ?? 0, 0, ',', '.') }}</p>
        </div>

        {{-- Confirmation Form --}}
        <form action="{{ route('payment.process') }}" method="POST" class="space-y-5 text-white">
            @csrf
            <input type="hidden" name="id" value="{{ $product['id'] }}">
            <input type="hidden" name="nama" value="{{ $product['name'] }}">
            <input type="hidden" name="total" value="{{ $product['price'] }}">
            <input type="hidden" name="category" value="{{ $product['category'] }}">

            {{-- Email --}}
            <div class="space-y-1">
                <label for="email" class="block text-sm font-medium text-white">
                    {{ app()->getLocale() === 'id' ? 'Alamat Email' : 'Email Address' }}
                </label>
                <input type="email" name="email" id="email" required
                    class="w-full px-4 py-3 bg-white text-black border border-gray-400 rounded-md focus:ring-[#FF007F] focus:border-[#FF007F] sm:text-sm">
            </div>

            {{-- Full Name --}}
            <div class="space-y-1">
                <label for="full_name" class="block text-sm font-medium text-white">
                    {{ app()->getLocale() === 'id' ? 'Nama Lengkap' : 'Full Name' }}
                </label>
                <input type="text" name="full_name" id="full_name" required
                    class="w-full px-4 py-3 bg-white text-black border border-gray-400 rounded-md focus:ring-[#FF007F] focus:border-[#FF007F] sm:text-sm">
            </div>

            {{-- Phone --}}
            <div class="space-y-1">
                <label for="phone" class="block text-sm font-medium text-white">
                    {{ app()->getLocale() === 'id' ? 'No. WhatsApp / No. Telefon' : 'Phone Number' }}
                </label>
                <input type="text" name="phone" id="phone" required
                    class="w-full px-4 py-3 bg-white text-black border border-gray-400 rounded-md focus:ring-[#FF007F] focus:border-[#FF007F] sm:text-sm">
            </div>

            {{-- Lyrics --}}
            <div class="space-y-1">
                <label for="lyrics" class="block text-sm font-medium text-white">
                    {{ app()->getLocale() === 'id' ? 'Isi Lirik Lagu' : 'Song Lyrics' }}
                </label>
                <textarea name="lyrics" id="lyrics" rows="4" required
                    class="w-full px-4 py-3 bg-white text-black border border-gray-400 rounded-md focus:ring-[#FF007F] focus:border-[#FF007F] sm:text-sm"
                    placeholder="{{ app()->getLocale() === 'id' ? 'Tulis lirik lagu di sini...' : 'Write your song lyrics here...' }}"></textarea>
            </div>

            {{-- Buttons --}}
            <div class="flex justify-center gap-4 pt-4">
                <a href="{{ url()->previous() }}"
                    class="px-6 py-3 rounded-lg border border-white text-white hover:bg-white hover:text-[#0E1117] transition">
                    {{ app()->getLocale() === 'id' ? 'Kembali' : 'Go Back' }}
                </a>
                <button type="submit"
                    class="px-6 py-3 rounded-lg text-white bg-[#FF007F] hover:bg-pink-600 transition">
                    {{ app()->getLocale() === 'id' ? 'Lanjutkan ke Pembayaran' : 'Proceed to Payment' }}
                </button>
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