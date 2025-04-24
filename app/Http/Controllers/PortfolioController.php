<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;
use Illuminate\Support\Facades\DB; 

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::all(); // Or use DB::table('portfolios')->get() if no model logic needed
        $language = app()->getLocale();

        return view('portfolio', compact('portfolios', 'language'));
    }
}
