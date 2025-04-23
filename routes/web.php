<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $categories = \App\Models\Category::get();

    $data = compact('categories');
    return view('index', $data);
});

// PER PRODUKAN
Route::get('/product', function () {
    $products = \App\Models\Product::where('visibility', true)->get();
    $data = compact('products');
    return view('product', $data);
});

Route::get('/product-bolen', function () {
    $products = \App\Models\Product::where('visibility', true)
                       ->where('category_id', 1)
                       ->get();
    $data = compact('products');
    return view('product-bolen', $data);
});

Route::get('/product-pastry', function () {
    $products = \App\Models\Product::where('visibility', true)
                       ->where('category_id', 2)
                       ->get();
    $data = compact('products');
    return view('product-pastry', $data);
});

Route::get('/product-kue-kering-500gr', function () {
    $products = \App\Models\Product::where('visibility', true)
                       ->where('category_id', 3)
                       ->get();
    $data = compact('products');
    return view('product-kue-kering-500gr', $data);
});

Route::get('/product-kue-kering-250gr', function () {
    $products = \App\Models\Product::where('visibility', true)
                       ->where('category_id', 8)
                       ->get();
    $data = compact('products');
    return view('product-kue-kering-250gr', $data);
});

Route::get('/product-hampers', function () {
    $products = \App\Models\Product::where('visibility', true)
                       ->where('category_id', 5)
                       ->get();
    $data = compact('products');
    return view('product-hampers', $data);
});

Route::get('/product-snack-dan-catering', function () {
    $products = \App\Models\Product::where('visibility', true)
                       ->where('category_id', 6)
                       ->get();
    $data = compact('products');
    return view('product-snack-dan-catering', $data);
});

Route::get('/price-list', function () {
    return view('price-list');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/auth/logout', [\App\Http\Controllers\Filament\LogoutController::class, 'logout'])->name('filament.admin.auth.logout');
