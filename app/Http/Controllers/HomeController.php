<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $thisTime = Carbon::now();

        $kolam = DB::table('kolams')->count();
        $benih = DB::table('benihs')->count();
        $lahan = DB::table('luas_lahans')->count();
        $pengolahan = DB::table('produksi_pengolahans')->count();
        $tambak = DB::table('produksi_tambaks')->count();
        $upr = DB::table('uprs')->count();
        // $kolam = DB::table('kolams')->count();

        return view('pages.beranda', compact('kolam','benih','tambak','lahan','pengolahan','upr','thisTime'));
    }
}
