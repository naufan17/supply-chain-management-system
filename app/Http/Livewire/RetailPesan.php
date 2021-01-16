<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\StokSupplier;

class RetailPesan extends Component
{
    public $stokSuppliers;
    
    public function render()
    {
        $this->stokSuppliers = StokSupplier::all();
        return view('retail.pesan');
    }
}
