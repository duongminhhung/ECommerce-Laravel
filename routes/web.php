<?php

use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::controller(CategoryController::class)->group(function () {
    Route::get('/',  'index')->name('index');
    Route::get('/vay-dam',  'slect')->name('vaydam');
    Route::get('/ao-dai-va-ao-so-mi',  'slect1')->name('aodai');
    Route::get('/hoodie-va-sweater',  'slect2')->name('hoodie');
    Route::get('/orders/{id}', 'show');
    Route::post('/orders', 'store');
    Route::get('/cart', 'cart')->name('cart');
    Route::get('/AddtoCart/{id}', 'AddtoCart')->name('AddtoCart');
    Route::get('/shop', 'shop')->name('shop');
    Route::get('/shop', 'shop')->name('shop');
    Route::get('/checkout', 'checkout')->name('checkout');
});


Route::controller(CartController::class)->group(function () {
    Route::get('/plus_quantity/{id}',  'plus_quantity')->name('plus_quantity');
    Route::get('/minus_quantity/{id}',  'minus_quantity')->name('minus_quantity');
    Route::get('/remove/{id}',  'remove')->name('remove');
    Route::get('/clearcart',  'clearcart')->name('clearcart');
});


Route::controller(ProductController::class)->group(function () {
    Route::get('/addToWishlist/{id}', 'addToWishlist')->name('addToWishlist');
    Route::get('/wishlist', 'wishlist')->name('wishlist');
    Route::get('/details/{id}', 'details')->name('details');
    Route::get('/test', 'test')->name('test');
    Route::get("/search", 'search')->name('search');
});



Route::controller(CustomerController::class)->group(function () {
    Route::get('/login',  'login')->name('login');
    Route::get('/register',  'register')->name('register');
    Route::post('/register',  'store')->name('store');
    Route::post('/login',  'store_login')->name('store_login');
    Route::get('/logout',  'logout')->name('logout');
    Route::get('/about',  'about')->name('about');
    Route::get('/blog',  'blog')->name('blog');
    Route::get('/contact',  'contact')->name('contact');
});
