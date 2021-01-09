<?php

namespace App\Http\Livewire;
use App\Models\PermintaanSupplier;

use Livewire\Component;

class SupplierPermintaan extends Component
{
    public $permintaanSuppliers;

    public function render()
    {
        $this->permintaanSuppliers = PermintaanSupplier::all();
        return view('supplier.permintaan');
    }
}
