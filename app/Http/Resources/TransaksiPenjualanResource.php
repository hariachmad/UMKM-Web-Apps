<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TransaksiPenjualanResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return ["data"=> [
            "tanggal_transaksi_penjualan"=>$this->tanggal_transaksi_penjualan,
            "plu_barang_jadi"=> $this->plu_barang_jadi,
            "qty"=> $this->qty,
            "total_harga"=> $this->total_harga,
            "lokasi"=>$this->lokasi,
        ]];
    }
}
