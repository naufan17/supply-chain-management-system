<?php

namespace App\Http\Controllers;

use App\Models\StokSupplier;
use App\Models\StokRetail;
use App\Models\PermintaanSupplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{    
    public function createBarangSupplier(Request $request)
    {
        StokSupplier::create([
            'nama_barang' => $request->nama_barang,
            'jumlah' => $request->jumlah
        ]);
        
        return redirect('supplier/stok');
    }

    public function deleteBarang($id)
    {
        StokSupplier::where('id_barang', $id)->delete();
        
        return redirect('supplier/stok');
    }

    public function updateBarang(Request $request)
    {  
        StokSupplier::where('id_barang', $request->id_barang)
                    ->update(['nama_barang' => $request->nama_barang, 'jumlah' => $request->jumlah]);
        
        return redirect('supplier/stok');
    }

    public function deletePermintaan($id)
    {
        PermintaanSupplier::where('id_pesanan', $id)->delete();
        
        return redirect('supplier/permintaan');
    }

    public function createBarangRetail(Request $request)
    {
        PermintaanSupplier::where('id_pesanan', $request->id_barang)->delete();

        StokRetail::create([
            'nama_barang' => $request->nama_barang,
            'jumlah' => $request->jumlah
        ]);
        
        return redirect('supplier/permintaan');
    }
}
