<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StokSupplier extends Model
{
    use HasFactory;

    protected $table = "stok_suppliers";

    protected $fillable = ['nama_barang', 'jumlah'];

    public function permintaanSupplier()
    {
        return $this->hasMany(PermintaanSupplier::class);
    }  
}
