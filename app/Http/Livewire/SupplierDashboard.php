<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\StokSupplier;
use App\Models\PermintaanSupplier;

class SupplierDashboard extends Component
{
    public $stokSuppliers;
    public $permintaanSuppliers;

    public function render()
    {
        $this->stokSuppliers = StokSupplier::count();
        $this->permintaanSuppliers = PermintaanSupplier::count();
        return view('supplier.dashboard');
    }
}
