<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\CartController;



Route::get('/', [ViewController::class, 'index'])->name('index');
Route::get('/produk', [ProdukController::class, 'index'])->name('index');

Auth::routes();
Route::group(['middleware' => ['auth','level:admin, user']], function(){
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    // user
    Route::get('/user', [UserController::class, 'index'])->name('user');
    Route::post('/editeuser', [UserController::class, 'edituser'])->name('edituser');
    Route::get('/editpassword', [UserController::class, 'editpassword'])->name('editpassword');
    Route::post('/ubahpassword', [UserController::class, 'ubahpassword'])->name('ubahpassword');

    //product 
    Route::get('/product', [ProductsController::class, 'index'])->name('products');

    Route::get('/editproduct/{id}', [ProductsController::class, 'editproduct'])->name('editproduct');
    Route::post('/updateproduct/{id}', [ProductsController::class, 'updateproduct'])->name('updateproduct');

    Route::get('/deleteproduct/{id}', [ProductsController::class, 'deleteproduct'])->name('deleteproduct');

    Route::get('/addproduct', [ProductsController::class, 'addproduct'])->name('addproduct');
    Route::post('/tambahproduct', [ProductsController::class, 'tambahproduct'])->name('tambahproduct');

    Route::get('/showproduct/{id}', [ProductsController::class, 'showproduct'])->name('showporduct');

    // kategori
    Route::get('/category', [CategoryController::class, 'index'])->name('category');

    Route::get('/addcategory', [CategoryController::class, 'addcategory'])->name('addcategory');
    Route::post('/tambahcategory', [CategoryController::class, 'tambahcategory'])->name('tambahcategory');

    Route::get('/editcategory/{id}', [CategoryController::class, 'editcategory'])->name('editcategory');
    Route::post('/updatecategory/{id}', [CategoryController::class, 'updatecategory'])->name('updatecategory');
    Route::get('/deletecategory/{id}', [CategoryController::class, 'deletecategory'])->name('deletecategory');

    // pesanan
    Route::get('/pesanan/{id}', [PesananController::class, 'index'])->name('index');
    Route::post('/pesanan/{id}', [PesananController::class, 'pesan'])->name('pesan');

    // checkout
    
    Route::get('/check_out', [PesananController::class, 'check_out'])->name('check_out');
    Route::post('/check_out/{id}', [PesananController::class, 'delete'])->name('delete');
    Route::get('konfirmasi-checkout', [PesananController::class, 'konfirmasi'])->name('konfirmasi');
    Route::get('sukses', [PesananController::class, 'sukses'])->name('sukses');
    


});
