<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\PenjualanRetail;

class RetailPenjualan extends Component
{
    public $penjualanRetails;

    public function render()
    {
        $this->penjualanRetails = PenjualanRetail::all();
        return view('retail.penjualan');
    }
}
