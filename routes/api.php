<?php

use App\Http\Controllers\BarangJadiController;
use App\Http\Controllers\TransaksiPenjualanController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/posts',[TransaksiPenjualanController::class,'index'])->name('index');
Route::post('/posts/simpan', [TransaksiPenjualanController::class,'create']);
Route::get('/posts/ambilData',[BarangJadiController::class,'index']);
Route::get('/posts/ambilHarga/{item}',[BarangJadiController::class,'ambilHarga']);