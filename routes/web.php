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
    
    Route::get('/supplier/dashboard', [SupplierController::class, 'dashboard'])->name('supplier/dashboard');
    
    Route::get('/supplier/form-tambah-barang', [SupplierController::class, 'formTambahBarang'])->name('supplier/form-tambah-barang');
    Route::get('/supplier/create-barang', [SupplierController::class, 'createBarang'])->name('supplier/create-barang');

    Route::get('/supplier/stok', [SupplierController::class, 'stok'])->name('supplier/stok');
    Route::get('/supplier/form-update-barang/{id}', [SupplierController::class, 'formUpdateBarang'])->name('supplier/form-update-barang');
    Route::get('/supplier/update-stok', [SupplierController::class, 'updateBarang'])->name('supplier/update-stok');
    Route::get('/supplier/delete-barang/{id}', [SupplierController::class, 'deleteBarang'])->name('supplier/delete-barang');

    Route::get('/supplier/permintaan', [SupplierController::class, 'permintaan'])->name('supplier/permintaan');
    Route::get('/supplier/form-kirim-barang', [SupplierController::class, 'formkirimBarang'])->name('supplier/kirim-barang');
    Route::get('/create-barang-retail', [SupplierController::class, 'createBarangRetail'])->name('create-barang-retail');
    Route::get('/supplier/delete-permintaan/{id}', [SupplierController::class, 'deletePermintaan'])->name('delete-permintaan');

});

Route::middleware(['auth:sanctum', 'verified', 'authretail'])->group(function () {
    
    Route::get('/retail/dashboard', [RetailController::class, 'dashboard'])->name('retail/dashboard');

    Route::get('/retail/pesan', [RetailController::class, 'pesan'])->name('retail/pesan');
    Route::get('/create-pesanan', [RetailController::class, 'createPesanan'])->name('tambah-pesanan');
    Route::get('/retail/delete-permintaan/{id}', [RetailController::class, 'deletePermintaan'])->name('delete-permintaan');

    Route::get('/retail/stok', [RetailController::class, 'stok'])->name('retail/stok');
    Route::get('/retail/form-update-barang/{id}', [RetailController::class, 'formUpdateBarang'])->name('retail/form-update-barang');
    Route::get('/retail/update-stok', [RetailController::class, 'updateBarang'])->name('retail/update-stok');
    Route::get('/retail/create-penjualan', [RetailController::class, 'createPenjualan'])->name('tambah-penjualan');

    Route::get('/retail/penjualan', [RetailController::class, 'penjualan'])->name('retail/penjualan');
});
