<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    $products = Product::all();
    return view('index')->with(compact('products'));
});
Route::get('/register', function () {
    return view('register');
});

Route::get('/cart', [CartController::class, 'cart']);
Route::post('/cart/checkout', [CartController::class, 'checkout_cart']);
Route::get('/cart/{product_id}', [CartController::class, 'add_to_cart']);
Route::post('/cart/edit/{cart_id}', [CartController::class, 'edit_cart']);
Route::get('/cart/delete/{cart_id}', [CartController::class, 'delete_cart']);


Route::get('/login', function () {
    return view('login');
});

Route::get('/admin', [AdminController::class, 'index'])->middleware('admin');
Route::get('/admin/delete/{sale_id}', [AdminController::class, 'delete'])->middleware('admin');
Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
});

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

