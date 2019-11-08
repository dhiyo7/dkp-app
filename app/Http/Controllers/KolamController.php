<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penyuluh;
use App\Kolam;
use DB;
use PDF;

class KolamController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $kolams = Kolam::all();
        return view('pages.kolam.index', compact('kolams'));
    }


    public function create()
    {
        $penyuluh = Penyuluh::all();
        return view('pages.kolam.addKolam', compact('penyuluh'));
    }


    public function store(Request $request)
    {
        Kolam::create($request->all());
        return back()->with(['success' => 'Data Berhasil Disimpan!']);
    }


    public function destroy(Kolam $id)
    {
        $id->delete();

        return back()->with(['danger' => 'Data Berhasil Dihapus!']);
    }

    public function cetak_kecamatan(Request $request){

        $bulan = $request->bulan;
        $kecamatan = $request->kecamatan;

        $data = DB::table('kolams')
                    ->where([
                    ['bulan', '=', $bulan],
                    ['kecamatan', '=', $kecamatan]
                ])->get();

        $pdf = PDF::loadview('pages.kolam.kolamKecamatan', compact('data'))
                            ->setPaper('a4', 'landscape');
        return $pdf->download('Data Kolam Pada Bulan '.$bulan.' dan Kecamatan '.$kecamatan.'.pdf');
    }

    public function cetak_bulan(Request $request){
        $bulan = $request->bulan;

        $data = DB::table('kolams')
                    ->where('bulan', '=', $bulan)->get();

        $pdf = PDF::loadview('pages.kolam.kolamBulan', compact('data'))->setPaper('a4', 'landscape');
        return $pdf->download('Data Bulan Pada Bulan '.$bulan.'.pdf');
    }
}
