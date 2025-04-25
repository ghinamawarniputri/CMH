<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;

class HomeController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::all();
        return view('index', compact('portfolios'));
    }
}
