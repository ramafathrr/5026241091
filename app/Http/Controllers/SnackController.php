<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SnackController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	// $pegawai = DB::table('pegawai')->get();

        //ambil data dari data table pegawai dengan pagination
        $snack = DB::table('snack')->paginate(10);

    	// mengirim data pegawai ke view index
    	return view('snack.index',['snack' => $snack]);
    }

    // method untuk menampilkan view form tambah pegawai
	public function tambah()
	{
		// memanggil view tambah
		return view('snack.create');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('snack')->insert([
			'merksnack' => $request->merksnack,
			'stocksnack' => $request->stocksnack,
			'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/snack');

	}

	// method untuk edit data pegawai
	public function edit($id)
	{
    // mengambil data pegawai berdasarkan id yang dipilih
		$snack = DB::table('snack')->where('kodesnack',$id)->first();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('snack.edit',['snack' => $snack]);

	}

	// update data pegawai
	public function update(Request $request)
	{
		// update data pegawai
		DB::table('snack')->where('kodesnack',$request->kodesnack)->update([
			'merksnack' => $request->merksnack,
			'stocksnack' => $request->stocksnack,
			'tersedia' => $request->tersedia
		]);

		// alihkan halaman ke halaman pegawai
		return redirect('/snack');
	}

	// method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('snack')->where('kodesnack',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/snack');
	}

    // cari
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$snack = DB::table('snack')
		->where('merksnack','like',"%".$cari."%")
		->paginate(10);

    		// mengirim data pegawai ke view index
		return view('index',['snack' => $snack]);

	}
}
