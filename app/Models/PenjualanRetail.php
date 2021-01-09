<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenjualanRetail extends Model
{
    use HasFactory;

    protected $table = "penjualan_retails";

    protected $fillable = ['id_barang', 'jumlah'];

    public function stokRetail()
    {
        return $this->hasOne(StokRetail::class);
    }
}
