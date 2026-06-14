<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DosenController;
use App\Http\Controllers\keranjangBelanjaController;
use App\Http\Controllers\NilaiKuliahController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\SnackController;

Route::get('/', function () {
    return view('welcome');
});

// halo
Route::get('halo', function () {
	return "<h1>Halo, Selamat datang</h1> di tutorial laravel <u>www.malasngoding.com</u>";
});

// // blog
// Route::get('blog', function () {
// 	return view('blog');
// })->name('route.blog');

Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

// pertemuan 5
Route::get('pertemuan5', function () {
    return view ('pertemuan5');
})->name('route.pertemuan5');

Route::get('grid', function () {
    return view ('grid');
})->name('route.grid');

Route::get('intro', function () {
    return view ('intro');
})->name('route.intro');

Route::get('Navs', function () {
    return view ('Navs');
})->name('route.Navs');

Route::get('news', function () {
    return view ('news');
})->name('route.news');


Route::get('news1', function () {
    return view ('news1');
})->name('route.news1');


Route::get('responsive', function () {
    return view ('responsive');
})->name('route.responsive');

Route::get('template', function () {
    return view ('template');
})->name('route.template');

Route::get('linktree', function () {
    return view ('linktree');
})->name('route.linktree');

Route::get('menu', function () {
    return view ('menu');
})->name('route.menu');

Route::get('makeoverInstagram', function () {
    return view ('makeoverInstagram');
})->name('route.makeoverInstagram');

Route::get('dosen', [DosenController::class, 'index']);
Route::get('biodata', [DosenController::class, 'biodata'])->name('route.biodata');

//route CRUD pegawai lama
Route::get('/pegawailama', [PegawaiController::class, 'index']);
Route::get('/pegawailama/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::get('/formulir/proses', [PegawaiController::class, 'proses']);

// route pegawai
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);

// route siswa
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{nrp}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{nrp}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{nrp}', [SiswaController::class, 'destroy'])->name('siswa.destroy');
Route::get('/siswa/cari', [SiswaController::class, 'cari'])->name('siswa.cari');


// route keranjang belanja
Route::get('/keranjangbelanja', [keranjangBelanjaController::class, 'index']);
Route::get('/keranjangbelanja/tambah', [keranjangBelanjaController::class, 'tambah']);
Route::post('/keranjangbelanja/store', [keranjangBelanjaController::class, 'store']);
Route::get('/keranjangbelanja/hapus/{id}', [keranjangBelanjaController::class, 'hapus']);

// route snack
Route::get('/snack', [SnackController::class, 'index']);
Route::get('/snack/tambah', [SnackController::class, 'tambah']);
Route::post('/snack/store', [SnackController::class, 'store']);
Route::get('/snack/edit/{id}', [SnackController::class, 'edit']);
Route::post('/snack/update', [SnackController::class, 'update']);
Route::get('/snack/hapus/{id}', [SnackController::class, 'hapus']);
Route::get('/snack/cari', [SnackController::class, 'cari']);

// route nilai kuliah
Route::get('/nilaikuliah',[NilaiKuliahController::class, 'index']);
Route::get('/nilaikuliah/tambah',[NilaiKuliahController::class, 'tambah']);
Route::post('/nilaikuliah/store',[NilaiKuliahController::class, 'store']);
