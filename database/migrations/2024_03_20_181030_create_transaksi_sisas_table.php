<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transaksi_sisas', function (Blueprint $table) {
            $table->increments('nomor_transaksi_sisa');
            $table->integer('plu_barang_jadi')->unsigned();
            $table->integer('qty');
            $table->integer('nomor_penjualan');
            $table->string('tanggal_transaksi_sisa');
            $table->bigInteger('total_harga');
            $table->string('lokasi');

            $table->foreign('plu_barang_jadi')->references('plu_barang_jadi')->on('barang_jadis');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Schema::dropIfExists('transaksi_sisas');
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        
    }
};
