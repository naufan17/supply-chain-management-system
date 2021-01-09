<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\StokSupplier;
use App\Models\PermintaanSupplier;
use App\Models\StokRetail;
use App\Models\PenjualanRetail;

class Dashboard extends Component
{
    public $stokSuppliers;
    public $stokRetails;
    public $permintaanSuppliers;
    public $penjualanRetails;

    public function render()
    {
        $this->stokRetails = StokRetail::count();
        $this->stokSuppliers = StokSupplier::count();
        $this->permintaanSuppliers = PermintaanSupplier::count();
        $this->penjualanRetails = PenjualanRetail::count();
        return view('dashboard');
    }
}
