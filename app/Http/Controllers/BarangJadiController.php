<?php

namespace App\Http\Controllers;
use App\Http\Resources\BarangJadiResource;
use App\Models\barangjadis;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class BarangJadiController extends Controller
{
    public function index()
    {
        $barang=barangjadis::all();
        // return response()->json(['data'=>$penjualan]);
        return BarangJadiResource::collection($barang);
    }

    public function ambilHarga($item)
    {
        $product=DB::table('barang_jadis')->where('plu_barang_jadi',$item)->get();
        return response()->json(['data'=>$product]);
        
    }

}
