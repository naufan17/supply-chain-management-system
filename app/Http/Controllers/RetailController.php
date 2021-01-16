<?php

namespace App\Http\Controllers;

use App\Models\PenjualanRetail;
use App\Models\PermintaanSupplier;
use App\Models\StokRetail;
use App\Models\StokSupplier;
use Illuminate\Http\Request;

class RetailController extends Controller
{
    public function createPenjualan(Request $request)
    {
        PenjualanRetail::create([
            'id_barang' => $request->id_barang,
            'jumlah' => $request->jumlah
        ]);

        $stokRetail = StokRetail::where('id_barang', $request->id_barang)->get();
        
        StokRetail::where('id_barang', $request->id_barang)
                    ->update(['jumlah' => ($stokRetail->jumlah - $request->jumlah)]);
        
        return redirect('retail/stok');
    }

    public function createPesanan(Request $request)
    {
        PermintaanSupplier::create([
            'id_barang' => $request->id_barang,
            'jumlah' => $request->jumlah
        ]);
        
        return redirect('retail/pesan');
    }

    public function updateBarang(Request $request)
    {  
        StokRetail::where('id_barang', $request->id_barang)
                    ->update(['nama_barang' => $request->nama_barang, 'jumlah' => $request->jumlah]);
        
        return redirect('retail/stok');
    }
}
