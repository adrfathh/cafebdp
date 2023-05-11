<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

            // LANDING

Route::get('/', [MainController::class, 'landingView']);

            // PRODUCT

Route::get('/product', [MainController::class, 'productView']);
Route::get('add-to-cart/{id}', [MainController::class, 'addToCart'])->name('add_to_cart');
Route::patch('update-cart', [MainController::class, 'update'])->name('update_cart');
Route::get('/product/add', [MainController::class, 'productAddView']);
Route::post('/product/store', [MainController::class, 'productStore']);
Route::delete('/product/{id}', [MainController::class, 'deleteProduct'])->name('/product/{id}');

            // CART

Route::get('/product/cart', [MainController::class, 'cartView'])->name('cart');
Route::delete('remove_from_cart', [MainController::class, 'remove'])->name('remove_from_cart');
Route::post('/checkout',[MainController::class,'checkout'])->name('checkout');
Route::patch('update-cart', [MainController::class, 'update'])->name('update_cart');