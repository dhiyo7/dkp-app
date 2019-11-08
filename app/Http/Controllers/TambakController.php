<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProduksiTambak;
use App\Penyuluh;
use DB;
use PDF;

class TambakController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $tambaks = ProduksiTambak::all();
        return view('pages.tambak.index', compact('tambaks'));
    }

    public function create()
    {
        $penyuluh = Penyuluh::all();
        return view('pages.tambak.addTambak', compact('penyuluh'));
    }

    public function store(Request $request)
    {
        ProduksiTambak::create($request->all());
        return back()->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function destroy(ProduksiTambak $id)
    {
        $id->delete();

        return back()->with(['danger' => 'Data Berhasil Dihapus!']);
    }

    public function cetak_kecamatan(Request $request){

        $bulan = $request->bulan;
        $kecamatan = $request->kecamatan;

        $data = DB::table('produksi_tambaks')
                    ->where([
                    ['bulan', '=', $bulan],
                    ['kecamatan', '=', $kecamatan]
                ])->get();

        $pdf = PDF::loadview('pages.tambak.tambakKecamatan', compact('data'))
                            ->setPaper('a4', 'landscape');
        return $pdf->download('Data Produksi Tambak Pada Bulan '.$bulan.' dan Kecamatan '.$kecamatan.'.pdf');
    }

    public function cetak_bulan(Request $request){
        $bulan = $request->bulan;

        $data = DB::table('produksi_tambaks')
                    ->where('bulan', '=', $bulan)->get();

        $pdf = PDF::loadview('pages.tambak.tambakBulan', compact('data'))->setPaper('a4', 'landscape');
        return $pdf->download('Data Produksi Tambak Pada Bulan '.$bulan.'.pdf');
    }
}
