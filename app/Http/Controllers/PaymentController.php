<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function process(Request $request)
    {
        // Logika proses pembayaran di sini
        return 'Pembayaran diproses untuk produk: ' . $request->input('name');
    }
}
