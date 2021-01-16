<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\RetailController;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\SupplierDashboard;
use App\Http\Livewire\RetailDashboard;
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

Route::middleware(['auth:sanctum', 'verified',])->group(function () {
    
    Route::get('/supplier/dashboard', SupplierDashboard::class)->name('supplier/dashboard');

    Route::get('/supplier/stok', SupplierStok::class)->name('supplier/stok');

    Route::get('/supplier/permintaan', SupplierPermintaan::class)->name('supplier/permintaan');

    Route::get('/retail/pesan', RetailPesan::class)->name('retail/pesan');

    Route::get('/retail/stok', RetailStok::class)->name('retail/stok');

    Route::get('/retail/penjualan', RetailPenjualan::class)->name('retail/penjualan');

    Route::get('/create-barang', [SupplierController::class, 'createBarang'])->name('tambah-barang');

    Route::get('/delete/{id}', [SupplierController::class, 'deleteBarang'])->name('delete-barang');

    Route::get('/create-penjualan', [RetailController::class, 'createPenjualan'])->name('tambah-penjualan');

    Route::get('/create-pesanan', [RetailController::class, 'createPesanan'])->name('tambah-pesanan');
});

Route::middleware(['auth:sanctum', 'verified', 'authretail'])->group(function () {
    
    Route::get('/retail/dashboard', RetailDashboard::class)->name('retail/dashboard');

    Route::get('/supplier-stok', SupplierStok::class)->name('supplier-stok');

    Route::get('/supplier-permintaan', SupplierPermintaan::class)->name('supplier-permintaan');

    Route::get('/retail-pesan', RetailPesan::class)->name('retail-pesan');

    Route::get('/retail-stok', RetailStok::class)->name('retail-stok');

    Route::get('/retail-penjualan', RetailPenjualan::class)->name('retail-penjualan');

    Route::get('/create-barang', [SupplierController::class, 'createBarang'])->name('tambah-barang');

    Route::get('/delete/{id}', [SupplierController::class, 'deleteBarang'])->name('delete-barang');

    Route::get('/create-penjualan', [RetailController::class, 'createPenjualan'])->name('tambah-penjualan');

    Route::get('/create-pesanan', [RetailController::class, 'createPesanan'])->name('tambah-pesanan');
});
