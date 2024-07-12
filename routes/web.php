<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\isAdmin;
use App\Http\controllers\UsersController;
use App\Http\Controllers\HomeController;


Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => ['auth', isAdmin::class]], function () {
    Route::get('/', function () {
        return view('admin.index');
    });

    // untuk Route Backend Lainnya
    Route::resource('supplier', App\Http\Controllers\SupplierController::class)->middleware('auth');
    Route::resource('kategori', App\Http\Controllers\KategoriController::class)->middleware('auth');
    Route::resource('produk', App\Http\Controllers\ProdukController::class)->middleware('auth');
    Route::resource('transaksi', App\Http\Controllers\TransaksiController::class)->middleware('auth');
    Route::resource('kasir', App\Http\Controllers\KasirController::class)->middleware('auth');


});
// route user

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


