<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\PermintaanSupplier;
use App\Models\StokSupplier;

class SupplierPermintaan extends Component
{    
    public $permintaanSuppliers,$stokSuppliers;
    public $isOpen = 0;

    public function render()
    {
        $this->permintaanSuppliers = PermintaanSupplier::all();
        $this->stokSuppliers = StokSupplier::all();
        return view('supplier.permintaan');
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
}
