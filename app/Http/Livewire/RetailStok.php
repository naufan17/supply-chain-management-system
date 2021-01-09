<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\StokRetail;

class RetailStok extends Component
{
    public $stokRetails, $nama_barang, $jumlah;
    public $isOpen = 0;

    public function render()
    {
        $this->stokRetails = StokRetail::all();
        return view('retail.stok');
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
