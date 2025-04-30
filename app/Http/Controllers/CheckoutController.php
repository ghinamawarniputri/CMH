<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Checkout;

class CheckoutController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required|integer',
            'name' => 'required|string',
            'category' => 'nullable|string',
            'price' => 'required|integer',
            'email' => 'required|email',
            'full_name' => 'required|string',
            'phone' => 'required|string',
            'lyrics' => 'nullable|string',
        ]);

        Checkout::create([
            'product_id' => $validated['id'],
            'product_name' => $validated['name'],
            'category' => $validated['category'],
            'price' => $validated['price'],
            'email' => $validated['email'],
            'full_name' => $validated['full_name'],
            'phone' => $validated['phone'],
            'lyrics' => $validated['lyrics'],
        ]);

        return redirect()->route('payment.success')->with('success', 'Checkout saved successfully!');
    }
}
