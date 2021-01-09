<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\StokSupplier;

class SupplierStok extends Component
{
    public $stokSuppliers, $nama_barang, $jumlah;
    public $isOpen = 0;

    public function render()
    {
        $this->stokSuppliers = StokSupplier::all();
        return view('supplier.stok');
    }

    public function create()
    {
        $this->resetInputFields();
        $this->showModal();
    }

    public function showModal()
    {
        $this->isOpen = true;
    }

    public function hideModal()
    {
        $this->isOpen = false;
    }

    private function resetInputFields()
    {
        $this->nama_barang = '';
        $this->jumlah = '';
    }

    public function update($id)
    {
        $member = Member::find($id); //BUAT QUERY UTK PENGAMBILAN DATA
        //LALU ASSIGN KE DALAM MASING-MASING PROPERTI DATANYA
        $this->member_id = $id;
        $this->name = $member->name;
        $this->openModal(); //LALU BUKA MODAL
    }
}
