<?php

namespace App\Http\Livewire;
use App\Models\PenjualanRetail;

use Livewire\Component;

class RetailPenjualan extends Component
{
    public $penjualanRetails;

    public function render()
    {
        $this->penjualanRetails = PenjualanRetail::all();
        return view('retail.penjualan');
    }
}
