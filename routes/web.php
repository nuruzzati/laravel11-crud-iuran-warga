<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('index');
});
Route::resource('/warga', 'WargaController');
Route::resource('/pembayaran', 'PembayaranController');
