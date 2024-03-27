<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BarangJadiResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "plu_barang_jadi"=>$this->plu_barang_jadi,
            "nama_item"=> $this->nama_item,
            "harga"=> $this->harga,
        ];
    }
}
