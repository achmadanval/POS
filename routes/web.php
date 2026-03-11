<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;

Route::get('/Home', [HomeController::class, 'home']);

Route::prefix('category')-> group(function (){
    Route::get('/food-beverage', [ProdukController::class , 'foodbeverage']);
    Route::get('/beauty-health', [ProdukController::class , 'beautyhealth']);
    Route::get('/home-care', [ProdukController::class , 'homecare']);
    Route::get('/baby-kid', [ProdukController::class , 'babykid']);
});

Route::get('/level', [LevelController::class , 'index']);
Route::get('/kategori', [KategoriController::class , 'index']);
Route::get('/user', [UserController::class , 'index']);
Route::get('/user/tambah', [UserController::class , 'tambah']);
Route::post('/user/tambah_simpan', [UserController::class , 'tambah_simpan']);
Route::get('/user/ubah/{id}', [UserController::class , 'ubah']);
Route::put('/user/ubah_simpan/{id}', [UserController::class , 'ubah_simpan']);
Route::get('/user/hapus/{id}', [UserController::class , 'hapus']);

Route::get('/user/{id}/name/{name}', [UserController::class ,'show']);

Route::get('/penjualan', [PenjualanController::class, 'index']);