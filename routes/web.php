<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PegawaiDBController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang</h1> di tutorial laravel <u>www.malasngoding.com</u>";
});

Route::get('blog', function () {
	return view('blog');
})->name('route.blog');

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

//route CRUD
Route::get('/pegawailama', [PegawaiController::class, 'index']);
Route::get('/pegawailama/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::get('/formulir/proses', [PegawaiController::class, 'proses']);

Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);
