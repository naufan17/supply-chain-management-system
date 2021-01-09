<?php

use Illuminate\Support\Facades\Route;
use App\Http\Liveware\Supplier;

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

Route::redirect('/', '/login');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/supplier-stok', function () {
        return view('supplier.stok');
    })->name('supplier-stok');

    Route::get('/supplier-permintaan', function () {
        return view('supplier.permintaan');
    })->name('supplier-permintaan');

    Route::get('/retail-pesan', function () {
        return view('retail.pesan');
    })->name('retail-pesan');

    Route::get('/retail-stok', function () {
        return view('retail.stok');
    })->name('retail-stok');

    Route::get('/retail-penjualan', function () {
        return view('retail.penjualan');
    })->name('retail-penjualan');
});
