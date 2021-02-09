<?php

namespace App\Http\Controllers;

use App\Models\StokSupplier;
use App\Models\StokRetail;
use App\Models\PermintaanSupplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
            'stok' => $request->stok
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
                    ->update(['nama_barang' => $request->nama_barang, 'stok' => $request->stok]);
        
        return redirect('supplier/stok');
    }

    public function hapusBarang($id)
    {
        StokSupplier::where('id_barang', $id)->delete();
        
        return redirect('supplier/stok');
    }

    public function permintaan()
    {
        $permintaanSuppliers = PermintaanSupplier::leftJoin('stok_suppliers', 'permintaan_suppliers.id_barang', '=', 'stok_suppliers.id_barang')->get();
        
        return view('supplier.permintaan', compact('permintaanSuppliers'));
    }

    public function formKirimBarang($id)
    {
        $permintaanSuppliers = PermintaanSupplier::leftJoin('stok_suppliers', 'permintaan_suppliers.id_barang', '=', 'stok_suppliers.id_barang')
                                                    ->where('id_pesanan', $id)
                                                    ->get();

        return view('supplier.form-kirim', compact('permintaanSuppliers'));
    }

    public function kirimBarang(Request $request)
    {
        foreach(StokSupplier::where('id_barang', $request->id_barang)->get() as $stokSupplier){
            if($request->total < $stokSupplier->stok){
                StokSupplier::where('id_barang', $request->id_barang)
                            ->update(['stok' => ($stokSupplier->stok - $request->total)]);
            } else if($request->total == $stokSupplier->stok) {
                StokSupplier::where('id_barang', $request->id_barang)
                            ->update(['stok' => ($stokSupplier->stok - $request->total), 'keterangan' => 'Habis']);
            }
        }

        PermintaanSupplier::where('id_pesanan', $request->id_pesanan)
                            ->update(['status' => 'Terkirim']);

        StokRetail::create([
            'nama_barang' => $request->nama_barang,
            'stok' => $request->total
        ]);
        
        return redirect('supplier/permintaan');
    }

    public function batalPermintaan($id)
    {
        PermintaanSupplier::where('id_pesanan', $id)
                        ->update(['status' => 'Batal']);
        
        return redirect('supplier/permintaan');
    }

    public function detailPermintaan($id)
    {
        $permintaanSuppliers = PermintaanSupplier::leftJoin('stok_suppliers', 'permintaan_suppliers.id_barang', '=', 'stok_suppliers.id_barang')
                                                    ->where('id_pesanan', $id)
                                                    ->get();
        
        return view('supplier.detail-permintaan', compact('permintaanSuppliers'));
    }
}
