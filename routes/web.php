<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\SupplierStok;
use App\Http\Livewire\SupplierPermintaan;
use App\Http\Livewire\RetailPesan;
use App\Http\Livewire\RetailStok;
use App\Http\Livewire\RetailPenjualan;

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

    Route::get('/supplier-stok', SupplierStok::class)->name('supplier-stok');

    Route::get('/supplier-permintaan', SupplierPermintaan::class)->name('supplier-permintaan');

    Route::get('/retail-pesan', RetailPesan::class)->name('retail-pesan');

    Route::get('/retail-stok', RetailStok::class)->name('retail-stok');

    Route::get('/retail-penjualan', RetailPenjualan::class)->name('retail-penjualan');
});
