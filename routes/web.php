<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\PromoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Db_websController;

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

Route::get('/', function () {
    return view('index');
});

// Route::get('/produk', function () {
//     return view('produk');
// });

// Route::get('/promo', function () {
//     return view('promo');
// });

Route::get('/cart', function () {
    return view('cart');
});

// Route::resource('/db_webs', Db_websController::class);
// Route::get('/produk.blade.php',[Db_websController::class,'home']);

Route::get('/produk', [ProductController::class, 'index']);
Route::get('/promo', [PromoController::class, 'index']);