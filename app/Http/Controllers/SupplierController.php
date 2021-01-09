<?php

namespace App\Http\Controllers;

use App\Models\StokSupplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{    
    public function createBarang(Request $request)
    {
        StokSupplier::create([
            'nama_barang' => $request->nama_barang,
            'jumlah' => $request->jumlah
        ]);
        return redirect('supplier-stok');
    }

    public function deleteBarang($id)
    {
        StokSupplier::where('id_barang', $id)->delete();
        return redirect('supplier-stok');
    }
}
