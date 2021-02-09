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
            $table->unsignedBigInteger('id_retail');
            $table->integer('total');
            $table->string('status')->default("Belum Dikirim");
            $table->timestamps();
            $table->foreign('id_barang')->references('id_barang')->on('stok_suppliers');
            $table->foreign('id_retail')->references('id')->on('users');
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
