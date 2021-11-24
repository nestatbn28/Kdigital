<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TiketController;



Route::get('/list',[TiketController::class,'index']);
Route::post('/store',[TiketController::class,'store']);
Route::post('/membalas/{number}',[TiketController::class,'buka']);
Route::post('/menutup/{number}',[TiketController::class,'tutup']);
Route::post('/hapus/{id}',[TiketController::class,'destroy']);
