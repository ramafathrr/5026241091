<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    // function index
    public function index($nama)
    {
        return $nama;
    }

    // function formulir
    public function formulir()
    {
        return view('formulir');
    }

    // function proses
    public function proses(Request $request)
    {
        // nama alamat umur
        $nama = $request->input('nama');
        $alamat = $request->input('alamat');
        $umur = $request->input('umur');

        return "Nama : " . $nama . ",<br>Umur : " . $umur .
            ", <br>Alamat : " . $alamat;
    }
}
