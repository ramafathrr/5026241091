<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class keranjangBelanjaController extends Controller
{
    public function index()
    {

        //ambil data dari data table pegawai dengan pagination
        $keranjangBelanja = DB::table('keranjangbelanja')->get();
    	// mengirim data pegawai ke view index
    	return view('keranjangbelanja.index',['keranjangbelanja' => $keranjangBelanja]);
    }

    // method untuk menampilkan view form tambah pegawai
	public function tambah()
	{
		// memanggil view tambah
		return view('keranjangbelanja.tambah');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('keranjangbelanja')->insert([
			'kodebarang' => $request->kodebarang,
			'jumlah' => $request->jumlah,
			'harga' => $request->harga,
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/keranjangbelanja');

	}

	// method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('keranjangbelanja')->where('id',$id)->delete();

		// alihkan halaman ke halaman keranjangbelanja
		return redirect('/keranjangbelanja');
	}
}
