<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\StokRetail;

class RetailStok extends Component
{
    public $stokRetails;

    public function render()
    {
        $this->stokRetails = StokRetail::all();
        return view('retail.stok');
    }
}
