<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenjualanRetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjualan_retails', function (Blueprint $table) {
            $table->id('id_penjualan', 10);
            $table->unsignedBigInteger('id_barang');
            $table->unsignedBigInteger('id_retail');
            $table->integer('jumlah');
            $table->timestamps();
            $table->foreign('id_barang')->references('id_barang')->on('stok_retails');
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
        Schema::dropIfExists('penjualan_retails');
    }
}
