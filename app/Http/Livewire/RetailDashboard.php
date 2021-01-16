<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\StokRetail;
use App\Models\PenjualanRetail;

class RetailDashboard extends Component
{
    public $stokRetails;
    public $penjualanRetails;

    public function render()
    {
        $this->stokRetails = StokRetail::count();
        $this->penjualanRetails = PenjualanRetail::count();
        return view('retail.dashboard');
    }
}
