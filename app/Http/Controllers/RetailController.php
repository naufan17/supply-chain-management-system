<?php

namespace App\Http\Controllers;

use App\Models\PenjualanRetail;
use App\Models\PermintaanSupplier;
use App\Models\StokRetail;
use App\Models\StokSupplier;
use Illuminate\Http\Request;

class RetailController extends Controller
{
    public function dashboard()
    {
        $stokRetails = StokRetail::count();
        $penjualanRetails = PenjualanRetail::count();

        return view('retail.dashboard', compact('stokRetails', 'penjualanRetails'));
    }

    public function pasokan()
    {
        $stokSuppliers = StokSupplier::all();
        
        return view('retail.pasokan', compact('stokSuppliers'));
    }

    public function formPesanBarang($id)
    {
        $stokRetails = StokRetail::where('id_barang', $id)->get();
        
        return view('retail/form-pesan', compact('stokRetails'));
    }

    public function createPesanan(Request $request)
    {
        PermintaanSupplier::create([
            'id_barang' => $request->id_barang,
            'id_retail' => 1,
            'jumlah' => $request->jumlah
        ]);
        
        return redirect('retail/pesan');
    }

    public function pesan()
    {
        $permintaanSuppliers = PermintaanSupplier::where('keterangan', 'Belum Dikirim')->get();
        
        return view('retail.pesan', compact('permintaanSuppliers'));
    }

    public function deletePesanan($id)
    {
        PermintaanSupplier::where('id_pesanan', $id)->delete();
        
        return redirect('retail/pesan');
    }

    public function stok()
    {
        $stokRetails = StokRetail::all();
        
        return view('retail.stok', compact('stokRetails'));
    }

    public function formUpdateBarang($id)
    {
        $stokRetails = StokRetail::where('id_barang', $id)->get();
        
        return view('retail.form-edit', compact('stokRetails'));
    }

    public function updateBarang(Request $request)
    {  
        StokRetail::where('id_barang', $request->id_barang)
                    ->update(['nama_barang' => $request->nama_barang, 'jumlah' => $request->jumlah, 'keterangan' => 'Tersedia']);
        
        return redirect('retail/stok');
    }

    public function deleteBarang($id)
    {
        StokRetail::where('id_barang', $id)->delete();
        
        return redirect('retail/stok');
    }

    public function formCreatePenjualan($id)
    {
        $stokRetails = stokRetail::where('id_barang', $id)->get();
        
        return view('retail.form-jual', compact('stokRetails'));
    }

    public function createPenjualan(Request $request)
    {
        PenjualanRetail::create([
            'id_barang' => $request->id_barang,
            'id_retail' => 1,
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

    public function penjualan()
    {
        $penjualanRetails = PenjualanRetail::all();
        
        return view('retail.penjualan', compact('penjualanRetails'));
    }
}
