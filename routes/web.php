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

    Route::get('/retail/pesan', [RetailController::class, 'pesanRetail'])->name('retail/pesan');

    Route::get('/retail/stok', [RetailController::class, 'stokRetail'])->name('retail/stok');

    Route::get('/retail/penjualan', [RetailController::class, 'penjualanRetail'])->name('retail/penjualan');

    Route::get('/create-barang-supplier', [SupplierController::class, 'createBarangSupplier'])->name('create-barang-supplier');

    Route::get('/update-stok-supplier', [SupplierController::class, 'updateBarang'])->name('update-stok-supplier');

    Route::get('/supplier/delete-barang/{id}', [SupplierController::class, 'deleteBarang'])->name('delete-barang');

    Route::get('/supplier/delete-permintaan/{id}', [SupplierController::class, 'deletePermintaan'])->name('delete-permintaan');

    Route::get('/create-barang-retail', [SupplierController::class, 'createBarangRetail'])->name('create-barang-retail');
});

Route::middleware(['auth:sanctum', 'verified', 'authretail'])->group(function () {
    
    Route::get('/retail/dashboard', [RetailController::class, 'dashboardRetail'])->name('retail/dashboard');

    Route::get('/retail/pesan', [RetailController::class, 'pesanRetail'])->name('retail/pesan');

    Route::get('/retail/stok', [RetailController::class, 'stokRetail'])->name('retail/stok');

    Route::get('/retail/penjualan', [RetailController::class, 'penjualanRetail'])->name('retail/penjualan');

    Route::get('/create-pesanan', [RetailController::class, 'createPesanan'])->name('tambah-pesanan');

    Route::get('/create-penjualan', [RetailController::class, 'createPenjualan'])->name('tambah-penjualan');

    Route::get('/update-stok-retail', [RetailController::class, 'updateBarang'])->name('update-stok-retail');
});
