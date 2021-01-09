<?php

namespace App\Http\Livewire;
use App\Models\StokSupplier;

use Livewire\Component;

class RetailPesan extends Component
{
    public $stokSuppliers;
    
    public function render()
    {
        $this->stokSuppliers = StokSupplier::all();
        return view('retail.pesan');
    }
}
