<?php

namespace App\Exports;
use App\Kolam;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Http\Request;
use Exportable;
use DB;

class KolamExport implements FromView
{


    public function view(): View
    {
        // $bulan = $request->bulan;
        // $kecamatan = $request->kecamatan;

        // $this->validate($request,[
        //     $bulan => 'exists:bulan',
        //     $kecamatan => 'exists:kecamatan'
        // ]);



        // $data = DB::table('kolams')
        //             ->where([
        //             ['bulan', '=', $bulan],
        //             ['kecamatan', '=', $kecamatan]
        //         ])->get();

        // return view('pages.kolam.kolamKecamatan', compact('data'));
        return view('pages.kolam.kolamKecamatan',[
            'data' => Kolam::all()
        ]);
    }
}
