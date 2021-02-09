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
    Route::get('/supplier/tambah-barang', [SupplierController::class, 'tambahBarang'])->name('supplier/tambah-barang');

    Route::get('/supplier/stok', [SupplierController::class, 'stok'])->name('supplier/stok');
    Route::get('/supplier/form-edit-barang/{id}', [SupplierController::class, 'formEditBarang'])->name('supplier/form-edit-barang');
    Route::get('/supplier/edit-barang', [SupplierController::class, 'editBarang'])->name('supplier/edit-barang');
    Route::get('/supplier/hapus-barang/{id}', [SupplierController::class, 'hapusBarang'])->name('supplier/hapus-barang');

    Route::get('/supplier/permintaan', [SupplierController::class, 'permintaan'])->name('supplier/permintaan');
    Route::get('/supplier/form-kirim-barang', [SupplierController::class, 'formkirimBarang'])->name('supplier/kirim-barang');
    Route::get('/create-barang-retail', [SupplierController::class, 'createBarangRetail'])->name('create-barang-retail');
    Route::get('/supplier/batal-permintaan/{id}', [SupplierController::class, 'batalPermintaan'])->name('batal-permintaan');
    Route::get('/supplier/detail-permintaan/{id}', [SupplierController::class, 'detailPermintaan'])->name('retail/detail-permintaan');

});

Route::middleware(['auth:sanctum', 'verified', 'authretail'])->group(function () {
    
    Route::get('/retail/dashboard', [RetailController::class, 'dashboard'])->name('retail/dashboard');

    Route::get('/retail/pasokan', [RetailController::class, 'pasokan'])->name('retail/pasokan');
    Route::get('/retail/form-tambah-pesan/{id}', [RetailController::class, 'formPesanBarang'])->name('retail/form-tambah-pesan');
    Route::get('/retail/tambah-pesanan', [RetailController::class, 'tambahPesanan'])->name('retail/tambah-pesanan');

    Route::get('/retail/pesan', [RetailController::class, 'pesan'])->name('retail/pesan');
    Route::get('/retail/batal-pesanan/{id}', [RetailController::class, 'batalPesanan'])->name('batal-pesanan');
    Route::get('/retail/detail-pesanan/{id}', [RetailController::class, 'detailPesanan'])->name('retail/detail-pesanan');

    Route::get('/retail/stok', [RetailController::class, 'stok'])->name('retail/stok');
    Route::get('/retail/form-update-barang/{id}', [RetailController::class, 'formUpdateBarang'])->name('retail/form-update-barang');
    Route::get('/retail/update-stok', [RetailController::class, 'updateBarang'])->name('retail/update-stok');
    Route::get('/retail/delete-barang/{id}', [RetailController::class, 'deleteBarang'])->name('retail/delete-barang');
    Route::get('/retail/form-create-penjualan/{id}', [RetailController::class, 'formCreatePenjualan'])->name('retail/form-create-penjualan');
    Route::get('/retail/create-penjualan', [RetailController::class, 'createPenjualan'])->name('tambah-penjualan');

    Route::get('/retail/penjualan', [RetailController::class, 'penjualan'])->name('retail/penjualan');
    Route::get('/retail/detail-penjualan/{id}', [RetailController::class, 'detailPenjualan'])->name('retail/detail-penjualan');
});
