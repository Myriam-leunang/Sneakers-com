<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RetourController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::middleware(['auth'])->group(function () {
    // Dashboard utilisateur
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Routes du panier
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
    Route::post('/cart/update/{productId}', [CartController::class, 'updateCart'])->name('cart.update');
    Route::post('/cart/remove/{productId}', [CartController::class, 'removeFromCart'])->name('cart.remove');
    
    // Routes des produits
    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    Route::get('/detail/{id}', [ProductController::class, 'show'])->name('products.show');
    Route::get('/search', [ProductController::class, 'search'])->name('products.search');

    // Routes paiement
    Route::get('/checkout', [PaymentController::class, 'index'])->name('checkout');
    Route::post('/pay', [PaymentController::class, 'pay'])->name('pay');
    Route::get('/create-payment/{totalPrice}', [PaymentController::class, 'createPayment'])->name('payment.createPayment');

    // Routes retours
    Route::get('/retour', [RetourController::class, 'index']);
    Route::get('/retour', [RetourController::class, 'showRetourForm'])->name('retour.form');
    Route::post('/retour', [RetourController::class, 'storeRetour'])->name('retour.store');

    // Routes Admin (seulement pour les admins)
    Route::middleware(['role:admin'])->group(function () {
        Route::get('/secondadmin', [AdminController::class, 'secondAdminPage'])->name('secondadmin')->middleware('role:admin');
        Route::get('/admin', [AdminController::class, 'index'])->name('admindashboard');
        Route::get('/admin/users', [AdminController::class, 'manageUsers'])->name('admin.users');
        Route::post('/admin/users/{id}/assign-role', [AdminController::class, 'assignRole'])->name('admin.assignRole');
    });

    Route::get('/login', function () {
        return view('auth.login'); // Assurez-vous que le fichier existe dans resources/views/auth/login.blade.php
    })->name('login');
    
});

require __DIR__.'/auth.php';
