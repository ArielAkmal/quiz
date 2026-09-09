<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\KategoriController;

Route::get('/', function () {
    return view('welcome');

});
Route::get('/daftar-informasi', [InformasiController::class, 'tampil']);
Route::get('/tambah-informasi', [InformasiController::class, 'create']);
Route::post('/simpan-informasi', [InformasiController::class, 'simpan']);
Route::get('/ubah-informasi/{informasi}', [InformasiController::class, 'ubah']);
Route::put('/update-informasi/{informasi}', [InformasiController::class, 'update']);
Route::get('/hapus-informasi/{informasi}', [InformasiController::class, 'konfirmasiHapus']);
Route::delete('/hapus-informasi/{informasi}', [InformasiController::class, 'hapus']);

Route::get('/daftar-kategori', [KategoriController::class, 'tampil']);
Route::get('/tambah-kategori', [KategoriController::class, 'create']);
Route::post('/simpan-kategori', [KategoriController::class, 'simpan']);
Route::get('/ubah-kategori/{kategori}', [KategoriController::class, 'ubah']);
Route::put('/update-kategori/{kategori}', [KategoriController::class, 'update']);
Route::delete('/hapus-kategori/{kategori}', [KategoriController::class, 'hapus']);
