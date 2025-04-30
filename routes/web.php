<?php

use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\Portfolio;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\LocalizationController;
use Illuminate\Http\Request;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\CheckoutController;

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
 
// Route::post('/payment-process', function (Request $request) {
//     return 'Pembayaran diproses untuk produk: ' . $request->input('name');
// })->name('payment.process');

Route::match(['get', 'post'], '/payment-process', [PaymentController::class, 'process'])->name('payment.process');

Route::get('/checkout', function (Illuminate\Http\Request $request) {
    $product = $request->only(['id', 'name', 'price', 'category']);
    return view('checkout', compact('product'));
})->name('checkout');

// // Payment routes
// Route::post('/payment/process', [PaymentController::class, 'process'])->name('payment.process');

// // Add a GET route for the checkout page
// Route::get('/checkout/{product?}', [PaymentController::class, 'checkout'])->name('checkout');

Route::get('/change-language/{lang}', [LocalizationController::class, 'changeLanguage'])->name('change-language');

Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');

Route::get('/', function () {
    $categories = Category::all();
    $portfolios = Portfolio::all();

    return view('index', compact('categories', 'portfolios'));
});

// Route::get('/', function () {
//     $categories = \App\Models\Category::get();

//     $data = compact('categories');
//     return view('index', $data);
// });

// PER PRODUKAN
Route::get('/product', function () {
    $products = \App\Models\Product::where('visibility', true)->get();
    $data = compact('products');
    return view('product', $data);
});

Route::get('/produk-lirik', function () {
    return view('produk-lirik');
});

Route::get('/produk-instrumen', function () {
    return view('produk-instrumen');
});

Route::get('/produk-efek', function () {
    return view('produk-efek');
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

// Route::post('/contact/send', [ContactController::class, 'sendContact'])->name('contact.send');

Route::post('/checkout/store', [CheckoutController::class, 'store'])->name('checkout.store');