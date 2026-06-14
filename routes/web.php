<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController ;
use App\Http\Controllers\PegawaiController ;
use App\Http\Controllers\BlogController ;
use App\Http\Controllers\PegawaiDBController ;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\HarddiskController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang</h1> di tutorial laravel <i>www.malasngoding.com</i>";
});
Route::get('blog', function () {
    return view('blog');
});

Route::get('week5', function () {
    return view('pertemuan5');
});

Route::get('linktree', function () {
    return view('linktree');
});

Route::get('week1', function () {
    return view('intro');
});

Route::get('week2', function () {
    return view('news');
});

Route::get('week4', function () {
    return view('week4');
});

Route::get('week3', function () {
    return view('responsive');
});


Route::get('dosen', [DosenController::class, 'index']);
Route::get('biodata', [DosenController::class, 'biodata']);

Route::get('/pegawainama/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

//blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

//crud tabel pegawai
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawaitambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawaistore', [PegawaiDBController::class, 'store']);
Route::get('/pegawaiedit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawaiupdate', [PegawaiDBController::class, 'update']);
Route::get('/pegawaihapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawaicari', [PegawaiDBController::class, 'cari']);

//crud tabel keranjangbelanja
Route::get('/keranjangbelanja', [KeranjangController::class, 'keranjang']);
Route::get('/keranjangbeli/{id}', [KeranjangController::class, 'beli']);
Route::post('/keranjangstore', [KeranjangController::class, 'storeKeranjang']);
Route::get('/keranjangbatal/{id}', [KeranjangController::class, 'batal']);

//crud tabel beras
Route::get('/harddisk', [HarddiskController::class, 'indexHarddisk']);
Route::get('/harddisk_tambah', [HarddiskController::class, 'tambahHarddisk']);
Route::post('/harddisk_store', [HarddiskController::class, 'storeHarddisk']);
Route::get('/harddisk_edit/{id}', [HarddiskController::class, 'editHarddisk']);
Route::post('/harddisk_update', [HarddiskController::class, 'updateHarddisk']);
Route::get('/harddisk_hapus/{id}', [HarddiskController::class, 'hapusHarddisk']);
Route::get('/harddisk_cari', [HarddiskController::class, 'cariHarddisk']);

//crud tabel nilaikuliah
Route::get('/nilaikuliah', [NilaiController::class, 'indexNilai']);
Route::get('/nilaitambah', [NilaiController::class, 'tambahNilai']);
Route::post('/nilaistore', [NilaiController::class, 'storeNilai']);

//crud tabel siswa
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{nrp}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{nrp}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{nrp}', [SiswaController::class, 'destroy'])->name('siswa.destroy');
