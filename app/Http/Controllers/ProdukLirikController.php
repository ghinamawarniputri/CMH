<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukLirikController extends Controller
{
    /**
     * Tampilkan halaman produk lirik.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('produk-lirik');
    }
}
