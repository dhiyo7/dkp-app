<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penyuluh;
use App\ProduksiPengolahan;
use App\JenisOlahan;
use DB;
use PDF;

class ProduksiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // $pengolahans = DB::table('produksi_pengolahans')
        //                 ->join('jenis_olahans', 'produksi_pengolahans.jenis_olahan', '=', 'jenis_olahans.id')
        //                 ->select('produksi_pengolahans.*', 'jenis_olahans.jenis_olahan as jenis')
        //                 ->get();
        return view('pages.pengolahan.index');
    }

    public function create()
    {
        $penyuluh = Penyuluh::all();
        $olahans = JenisOlahan::all();
        return view('pages.pengolahan.addPengolahan', compact('penyuluh', 'olahans'));
    }

    public function store(Request $request)
    {
        ProduksiPengolahan::create($request->all());
        return back()->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function destroy(ProduksiPengolahan $id)
    {
        $id->delete();

        return back()->with(['danger' => 'Data Berhasil Dihapus!']);
    }

    public function cetak_kecamatan(Request $request){

        $bulan = $request->bulan;
        $kecamatan = $request->kecamatan;

        // $data = DB::table('produksi_pengolahans')
        //             ->where([
        //             ['bulan', '=', $bulan],
        //             ['kecamatan', '=', $kecamatan]
        //         ])->get();

        $data = DB::table('produksi_pengolahans')
                ->join('jenis_olahans', 'produksi_pengolahans.jenis_olahan', '=', 'jenis_olahans.id')
                ->select('produksi_pengolahans.*', 'jenis_olahans.jenis_olahan as jenis')
                ->where([
                    ['bulan', '=', $bulan],
                    ['kecamatan', '=', $kecamatan]
                ])->get();

                $pdf = PDF::loadview('pages.pengolahan.pengolahanKecamatan', compact('data'))
                ->setPaper('a4', 'landscape');
        return $pdf->download('Data Produksi Pengolahan Pada Bulan '.$bulan.' dan Kecamatan '.$kecamatan.'.pdf');
    }

    public function cetak_bulan(Request $request){
        $bulan = $request->bulan;

        // $data = DB::table('produksi_pengolahans')
        //             ->where('bulan', '=', $bulan)->get();

        $data = DB::table('produksi_pengolahans')
                ->join('jenis_olahans', 'produksi_pengolahans.jenis_olahan', '=', 'jenis_olahans.id')
                ->select('produksi_pengolahans.*', 'jenis_olahans.jenis_olahan as jenis')
                ->where('bulan', '=', $bulan)->get();

        $pdf = PDF::loadview('pages.pengolahan.pengolahanBulan', compact('data'))->setPaper('a4', 'landscape');
        return $pdf->download('Data Produksi Pengolahan Pada Bulan '.$bulan.'.pdf');
    }
}
