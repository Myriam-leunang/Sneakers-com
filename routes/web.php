<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/cart', [CartController::class, 'index'])->name('cart');

Route::group(['middleware' => ['auth']], function () {

 
 Route::get('/detail', [CartController::class, 'detail']);
 Route::get('/checkout', [CartController::class, 'checkout']);
 Route::get('/dashboard', [ProductController::class, 'index']);
 Route::get('/detail/{id}', [ProductController::class, 'show'])->name('products.show');
 Route::get('/search', [ProductController::class, 'search'])->name('products.search');
 Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');

});

require __DIR__.'/auth.php';
