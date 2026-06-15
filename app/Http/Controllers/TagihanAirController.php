<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class TagihanAirController extends Controller
{
    public function index()
    {
        $tagihan_air = DB::table('tagihan_air')->get();
        return view('tagihanair.index', ['tagihan_air' => $tagihan_air]);
    }

    public function create()
    {
        return view('tagihanair.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'NoMeteran' => 'required|string|max:6',
            'MeterAwal' => 'required|integer',
            'MeterAkhir' => 'required|integer',
        ]);

        DB::table('tagihan_air')->insert([
            'NoMeteran' => $request->NoMeteran,
            'MeterAwal' => $request->MeterAwal,
            'MeterAkhir' => $request->MeterAkhir,
        ]);
        return redirect('/eas');
    }
}
