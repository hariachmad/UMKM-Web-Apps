<?php

namespace App\Http\Controllers;

use App\Http\Resources\TransaksiPenjualanResource;
use App\Http\Resources\TransaksiPenjualanDetailResource;
use App\Models\transaksi_penjualans;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class TransaksiPenjualanController extends Controller
{
    public function index()
    {
        $penjualan=transaksi_penjualans::all();
        // return response()->json(['data'=>$penjualan]);
        return TransaksiPenjualanResource::collection($penjualan);
    }


    public function create(Request $request)
        {
        $validated=$request->validate([
            "tanggal_transaksi_penjualan"=>"required",
            "plu_barang_jadi"=> "required",
            "qty"=> "required",
            "total_harga"=> "required",
            "lokasi"=> "required",
        ]);

    //     return response()->json("Berhasil");
    $post= transaksi_penjualans::create($request->all());
    return new TransaksiPenjualanResource($post);
    }

    
}
