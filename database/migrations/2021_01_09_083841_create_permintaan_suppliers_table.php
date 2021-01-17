<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermintaanSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permintaan_suppliers', function (Blueprint $table) {
            $table->id('id_pesanan', 10);
            $table->unsignedBigInteger('id_barang');
            $table->integer('jumlah');
            $table->string('keterangan')->default("Belum Dikirim");
            $table->timestamps();
            $table->foreign('id_barang')->references('id_barang')->on('stok_suppliers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permintaan_suppliers');
    }
}
