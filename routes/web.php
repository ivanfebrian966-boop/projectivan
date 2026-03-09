<?php

use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListBarangController;

Route::get('/listbarang/{id}/{nama}', [ListBarangController::class, 'tampilkan']);
Route::get('/list_barang/{id}/{nama}', function($id, $nama){
    return view('list_barang', compact('id', 'nama'));
});

Route::get('/', [HomeController::class, 'index']); 
Route::get('/contact', [HomeController::class, 'contact']);
