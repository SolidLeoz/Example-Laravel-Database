<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MarketController;
use App\Http\Controllers\PublicController;
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

Route::get('/', [PublicController::class, 'home'])->name('home');
Route::get('/create-product', [ProductController::class, 'create'])->name('create');
Route::post('/store-product', [ProductController::class,'store'])->name('store');
Route::get('/index-product', [ProductController::class,'index'])->name('index');
Route::get('/index-show/{product}', [ProductController::class,'show'])->name('show');



route::get('/create-market', [MarketController::class, (create)])->name('createMarket');