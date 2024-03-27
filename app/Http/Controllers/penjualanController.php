<?php

namespace App\Http\Controllers;

use App\Models\penjualans;
use Illuminate\Http\Request;

class penjualanController extends Controller
{
    public function index()
    {
        $penjualan=penjualans::all();
        return view('welcome',['listPenjualan'=>$penjualan]);
    }

    public function simpanPenjualan(Request $request)
    {
        $penjualan = penjualans::create([
            'tanggal_transaksi_penjualan' => $request->tanggal_transaksi_penjualan,
            'total_penjualan' => $request->total_penjualan,
            'lokasi' => $request->tgl_lahir,
        ]);


    
}
}