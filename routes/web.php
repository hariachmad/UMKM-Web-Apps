<?php

use App\Http\Controllers\mainController;
use App\Http\Controllers\penjualanController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Teknik Routes memakai Clossure
// Route::get('/', function () {
//     return view('index');
// });

Route::get('/',[mainController::class,'menuUtama']);
Route::get('/mainmenu',[mainController::class,'menuUtama']);
Route::get('/',[mainController::class,'login']);
Route::get('/home',[penjualanController::class,'index']);
Route::get('penjualan/simpan', [penjualanController::class, 'simpanPenjualan'])->name('simpanPenjualan')->middleware('auth');
