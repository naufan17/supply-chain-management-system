<?php

namespace App\Http\Livewire;
use App\Models\StokSupplier;

use Livewire\Component;

class SupplierStok extends Component
{
    public $stokSuppliers;

    public function render()
    {
        $this->stokSuppliers = StokSupplier::all();
        return view('supplier.stok');
    }
}
