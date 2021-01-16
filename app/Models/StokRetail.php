<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StokRetail extends Model
{
    use HasFactory;

    protected $table = "stok_retails";

    protected $fillable = ['nama_barang', 'jumlah'];

    public function penjualanRetail()
    {
        return $this->hasMany(PenjualanRetail::class);
    }
}
