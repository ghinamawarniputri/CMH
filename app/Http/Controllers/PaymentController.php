<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class PaymentController extends Controller
{
    public function process(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'lirik' => 'nullable|string',
            'quantity' => 'required|numeric',
            'total' => 'required|numeric',
        ]);
        $validated['status'] = 'pending';
    
        $order = Order::create($validated);
    
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        \Midtrans\Config::$isProduction = false;
        \Midtrans\Config::$isSanitized = true;
        \Midtrans\Config::$is3ds = true;
    
        $params = array(
            'transaction_details' => array(
                'order_id' => 'ORDER-' . $order->id . '-' . time(),
                'gross_amount' => $order->total,
            ),
            'customer_details' => array(
                'first_name' => $order->nama,
                'email' => $order->email,
                'phone' => $order->phone,
            ),
        );
    
        $snapToken = \Midtrans\Snap::getSnapToken($params);
    
        return view('snap', [
            'snapToken' => $snapToken,
            'order' => $order,
        ]);
    }
    
}
