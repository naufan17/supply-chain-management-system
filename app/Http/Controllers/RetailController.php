<?php

namespace App\Http\Controllers;

use App\Models\PenjualanRetail;
use App\Models\PermintaanSupplier;
use App\Models\StokRetail;
use App\Models\StokSupplier;
use Illuminate\Http\Request;

class RetailController extends Controller
{
    public function dashboardRetail()
    {
        $stokRetails = StokRetail::count();
        $penjualanRetails = PenjualanRetail::count();

        return view('retail.dashboard', compact('stokRetails', 'penjualanRetails'));
    }

    public function pesanRetail()
    {
        $stokSuppliers = StokSupplier::all();
        $permintaanSuppliers = PermintaanSupplier::where('keterangan', 'Belum Dikirim')->get();
        
        return view('retail.pesan', compact('stokSuppliers', 'permintaanSuppliers'));
    }

    public function stokRetail()
    {
        $stokRetails = StokRetail::all();
        
        return view('retail.stok', compact('stokRetails'));
    }

    public function penjualanRetail()
    {
        $penjualanRetails = PenjualanRetail::all();
        
        return view('retail.penjualan', compact('penjualanRetails'));
    }

    public function createPenjualan(Request $request)
    {
        PenjualanRetail::create([
            'id_barang' => $request->id_barang,
            'jumlah' => $request->jumlah
        ]);

        foreach(StokRetail::where('id_barang', $request->id_barang)->get() as $stokRetail){
            if($request->jumlah < $stokRetail->jumlah){
                StokRetail::where('id_barang', $request->id_barang)
                            ->update(['jumlah' => ($stokRetail->jumlah - $request->jumlah)]);
            } else if ($request->jumlah >= $stokRetail->jumlah){
                StokRetail::where('id_barang', $request->id_barang)
                            ->update(['jumlah' => ($stokRetail->jumlah - $request->jumlah), 'keterangan' => 'Habis']);
            }
            
        }
        
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
                    ->update(['nama_barang' => $request->nama_barang, 'jumlah' => $request->jumlah, 'keterangan' => 'Tersedia']);
        
        return redirect('retail/stok');
    }

    public function deletePermintaan($id)
    {
        PermintaanSupplier::where('id_pesanan', $id)->delete();
        
        return redirect('retail/pesan');
    }
}
