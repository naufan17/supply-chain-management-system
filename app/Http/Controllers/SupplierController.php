<?php

namespace App\Http\Controllers;

use App\Models\StokSupplier;
use App\Models\StokRetail;
use App\Models\PermintaanSupplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{    
    public function dashboard()
    {
        $stokSuppliers = StokSupplier::count();
        $permintaanSuppliers = PermintaanSupplier::count();

        return view('supplier.dashboard', compact('stokSuppliers', 'permintaanSuppliers'));
    }

    public function formTambahBarang()
    {
        return view('supplier.form-tambah');
    }

    public function tambahBarang(Request $request)
    {
        StokSupplier::create([
            'nama_barang' => $request->nama_barang,
            'jumlah' => $request->jumlah
        ]);
        
        return redirect('supplier/stok');
    }

    public function stok()
    {
        $stokSuppliers = StokSupplier::all();
        
        return view('supplier.stok', compact('stokSuppliers'));
    }

    public function formEditBarang($id)
    {
        $stokSuppliers = StokSupplier::where('id_barang', $id)->get();
        
        return view('supplier.form-edit', compact('stokSuppliers'));
    }

    public function editBarang(Request $request)
    {  
        StokSupplier::where('id_barang', $request->id_barang)
                    ->update(['nama_barang' => $request->nama_barang, 'jumlah' => $request->jumlah, 'keterangan' => 'Tersedia']);
        
        return redirect('supplier/stok');
    }

    public function hapusBarang($id)
    {
        StokSupplier::where('id_barang', $id)->delete();
        
        return redirect('supplier/stok');
    }

    public function permintaan()
    {
        $permintaanSuppliers = PermintaanSupplier::all();
        $stokSuppliers = StokSupplier::all();
        
        return view('supplier.permintaan', compact('permintaanSuppliers', 'stokSuppliers'));
    }

    public function formKirimBarang()
    {
        return view('supplier.form-kirim');
    }

    public function createBarangRetail(Request $request)
    {
        foreach(StokSupplier::where('id_barang', $request->id_barang)->get() as $stokSupplier){
            if($request->jumlah < $stokSupplier->jumlah){
                StokSupplier::where('id_barang', $request->id_barang)
                            ->update(['jumlah' => ($stokSupplier->jumlah - $request->jumlah)]);
            } else if($request->jumlah >= $stokSupplier->jumlah) {
                StokSupplier::where('id_barang', $request->id_barang)
                            ->update(['jumlah' => ($stokSupplier->jumlah - $request->jumlah), 'keterangan' => 'Habis']);
            }
        }

        PermintaanSupplier::where('id_pesanan', $request->id_pesanan)
                            ->update(['keterangan' => 'Terkirim']);

        StokRetail::create([
            'nama_barang' => $request->nama_barang,
            'jumlah' => $request->jumlah
        ]);
        
        return redirect('supplier/permintaan');
    }

    public function batalPermintaan($id)
    {
        PermintaanSupplier::where('id_pesanan', $id)
                        ->update(['keterangan' => 'Batal']);
        
        return redirect('supplier/permintaan');
    }

    public function detailPermintaan($id)
    {
        $permintaanSuppliers = PermintaanSupplier::where('id_pesanan', $id)->get();
        
        return view('supplier.detail-permintaan', compact('permintaanSuppliers'));
    }
}
