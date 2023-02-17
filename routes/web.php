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
Route::get('/',[CategoryController::class,'index'])->name('index');

Route::get('/vay-dam',[CategoryController::class,'slect'])->name('vaydam');
Route::get('/ao-dai-va-ao-so-mi',[CategoryController::class,'slect1'])->name('aodai');
Route::get('/hoodie-va-sweater',[CategoryController::class,'slect2'])->name('hoodie');
Route::get('/login',[CustomerController::class,'login'])->name('login');
Route::get('/register',[CustomerController::class,'register'])->name('register');
Route::post('/register',[CustomerController::class,'store'])->name('store');
Route::post('/login',[CustomerController::class,'store_login'])->name('store_login');
Route::get('/logout',[CustomerController::class,'logout'])->name('logout');
Route::get('/cart',[CategoryController::class,'cart'])->name('cart');
Route::get('/AddtoCart/{id}',[CategoryController::class,'AddtoCart'])->name('AddtoCart');
// Route::patch('update-cart', [CategoryController::class, 'update'])->name('update.cart');
Route::get('/plus_quantity/{id}',[CartController::class,'plus_quantity'])->name('plus_quantity');
Route::get('/minus_quantity/{id}',[CartController::class,'minus_quantity'])->name('minus_quantity');
Route::get('/remove/{id}',[CartController::class,'remove'])->name('remove');
Route::get('/clearcart',[CartController::class,'clearcart'])->name('clearcart');
Route::get('/shop',[CategoryController::class,'shop'])->name('shop');
Route::get('/shop',[CategoryController::class,'shop'])->name('shop');



Route::get('/details/{id}',[ProductController::class,'details'])->name('details');
Route::get('/test',[ProductController::class,'test'])->name('test');
Route::get("search",[ProductController::class,'search'])->name('search');