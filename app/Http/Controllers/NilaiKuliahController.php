<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class NilaiKuliahController extends Controller
{
    public function index()
    {
        $nilaikuliah = DB::table('nilaikuliah')->get();
        return view('nilaikuliah.index', ['nilaikuliah' => $nilaikuliah]);
    }

    public function tambah()
    {
        return view('nilaikuliah.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'NRP' => 'required|string|max:6',
            'NilaiAngka' => 'required|integer',
            'SKS' => 'required|integer',
        ]);

        DB::table('nilaikuliah')->insert([
            'NRP' => $request->NRP,
            'NilaiAngka' => $request->NilaiAngka,
            'SKS' => $request->SKS,
        ]);
        return redirect('/nilaikuliah');
    }
}
