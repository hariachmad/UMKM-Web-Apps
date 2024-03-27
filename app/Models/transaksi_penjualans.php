<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi_penjualans extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table='transaksi_penjualans';
    protected $fillable=['nomor_transaksi_penjualan','tanggal_transaksi_penjualan','plu_barang_jadi','qty','total_harga','lokasi'];
}
