<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
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


