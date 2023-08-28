<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;


use App\Models\Product;
use App\Models\Order;
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
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
// Route::put('product/edit/{id}',[ProductController::class,'edit'])->name('product.edit');
// Route::get('product/update/{id}',[ProductController::class,'update'])->name('product.update');
 

//  Route::delete('/product/delete/{id}',[ProductController::class,'destroy'])->name('product.delete');
Route::get('product',[ProductController::class,'index'])->name('product.index');
Route::get('/product/show/{id}',[ProductController::class,'show'])->name('product.show');
 
 Route::delete('product/delete/{id}',[ProductController::class,'destroy'])->name('product.delete');
 Route::post('product/edit/{id}',[ProductController::class,'edit'])->name('product.edit');
Route::get('product/update/{id}',[ProductController::class,'update'])->name('product.update');

 Route::get('/create',[ProductController::class,'create'])->name('product.create');
 Route::post('/product/store',[ProductController::class,'store'])->name('product.store');
 Route::get('cart', [ProductController::class, 'cart'])->name('cart');
Route::get('/product/addToCart/{id}', [ProductController::class, 'addToCart'])->name('product.addToCart');

 // routes/web.php



// Route::put('/products/{product}/mark-sold', [ProductController::class, 'markSold'])->name('products.markSold');
 // routes/web.php



Route::post('/products/search', [ProductController::class, 'search']);
 Route::resource('category', CategoryController::class);
 Route::get('order',[OrderController::class, 'index'])->name('order.index');
//  Route::post('/order/search', [OrderController::class, 'search'])->name('order.search');

Route::get('/user/{id}', [UserController::class, 'show'])->name('user.show');


