<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LuasLahan;
use App\Penyuluh;
use DB;
use PDF;

class LuasLahanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $lahans = LuasLahan::all();
        return view('pages.luaslahan.index', compact('lahans'));
    }

    public function create()
    {
        $penyuluh = Penyuluh::all();
        return view('pages.luaslahan.addLuas', compact('penyuluh'));
    }

    public function store(Request $request)
    {
        LuasLahan::create($request->all());
        return back()->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function destroy(LuasLahan $id)
    {
        $id->delete();

        return back()->with(['danger' => 'Data Berhasil Dihapus!']);
    }

    public function cetak_bulan(Request $request){
        $bulan = $request->bulan;

        $data = DB::table('luas_lahans')
                    ->where('bulan', '=', $bulan)->get();

        $pdf = PDF::loadview('pages.lahan.lahanBulan', compact('data'))->setPaper('a4', 'landscape');
        return $pdf->download('Data Luas Lahan Pada Bulan '.$bulan.'.pdf');
    }
}

