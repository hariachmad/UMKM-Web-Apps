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
        Schema::create('transaksi_penjualans', function (Blueprint $table) {
            $table->Integer('nomor_transaksi_penjualan')->primary()->unsigned()->increments();
            $table->string('tanggal_transaksi_penjualan');
            $table->integer('plu_barang_jadi');
            $table->integer('qty');
            $table->bigInteger('total_harga');
            $table->string( 'lokasi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi_penjualans');
    }
};
