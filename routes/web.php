<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\OrdersController;

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
})->name('index');

Route::get('/products', function () {
    return view('products');
})->name('products');

Route::get('/single_product', function () {
    return view('single_product');
})->name('single_product');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');


// Admin panel


Route::group(['prefix'=>'/admin'],function(){

    Route::get('', function(){
        return view('admin.index');
    })->name('admin.index');
    
    Route::resources([
        '/users' => UserController::class,
        '/products' => ProductsController::class,
        '/orders' => OrdersController::class,
    ]);

});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
