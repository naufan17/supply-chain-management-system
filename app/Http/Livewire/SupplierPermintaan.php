<?php

namespace App\Http\Livewire;
use App\Models\PermintaanSupplier;

use Livewire\Component;

class SupplierPermintaan extends Component
{
    public $isOpen = 0;
    
    public $permintaanSuppliers;

    public function render()
    {
        $this->permintaanSuppliers = PermintaanSupplier::all();
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
