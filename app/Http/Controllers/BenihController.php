<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penyuluh;
use App\Benih;
use DB;
use PDF;

class BenihController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $benihs = Benih::all();
        return view('pages.benih.index', compact('benihs'));
    }

    public function create()
    {
        $penyuluh = Penyuluh::all();
        return view('pages.benih.addBenih', compact('penyuluh'));
    }

    public function store(Request $request)
    {
        Benih::create($request->all());
        return back()->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function destroy(Benih $id)
    {
        $id->delete();

        return back()->with(['danger' => 'Data Berhasil Dihapus!']);
    }

    public function cetak_kecamatan(Request $request){

        $bulan = $request->bulan;
        $kecamatan = $request->kecamatan;

        $data = DB::table('benihs')
                    ->where([
                    ['bulan', '=', $bulan],
                    ['kecamatan', '=', $kecamatan]
                ])->get();

        $pdf = PDF::loadview('pages.benih.benihKecamatan', compact('data'))
                            ->setPaper('a4', 'landscape');
        return $pdf->download('Data Produksi Benih Pada Bulan '.$bulan.' dan Kecamatan '.$kecamatan.'.pdf');
    }

    public function cetak_bulan(Request $request){
        $bulan = $request->bulan;

        $data = DB::table('benihs')
                    ->where('bulan', '=', $bulan)->get();

        $pdf = PDF::loadview('pages.benih.benihBulan', compact('data'))->setPaper('a4', 'landscape');
        return $pdf->download('Data Produksi Benih Pada Bulan '.$bulan.'.pdf');
    }
}
