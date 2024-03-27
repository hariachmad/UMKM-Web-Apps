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
        Schema::create('barangjadis', function (Blueprint $table) {
            $table->integer('plu_barang_jadi')->primary()->unsigned()->increments();
            $table->string('nama_item');
            $table->bigInteger('harga');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barangjadis');
    }
};
