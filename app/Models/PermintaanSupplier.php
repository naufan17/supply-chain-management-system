<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermintaanSupplier extends Model
{
    use HasFactory;

    protected $table = "permintaan_suppliers";

    protected $fillable = ['id_barang', 'jumlah'];

    public function stokSupplier()
    {
        return $this->hasOne(StokSupplier::class);
    }
}
