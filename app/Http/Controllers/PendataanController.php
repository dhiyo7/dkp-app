<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penyuluh;
use App\PelakuUsaha;
use DB;


class PendataanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()

    {
        $k_kub = PelakuUsaha::where([
            ['jenis', '=', 0],
            ['kategori', '=', 'KUB'],])->count();
        $k_poklahsar = PelakuUsaha::where([
            ['jenis', '=', 0],
            ['kategori', '=', 'POKLAHSAR'],])->count();
        $k_pokdakan = PelakuUsaha::where([
            ['jenis', '=', 0],
            ['kategori', '=', 'POKDAKAN'],])->count();
        $k_kugar = PelakuUsaha::where([
            ['jenis', '=', 0],
            ['kategori', '=', 'KUGAR'],])->count();

        $p_kub = PelakuUsaha::where([
            ['jenis', '=', 1],
            ['kategori', '=', 'KUB'],])->count();
        $p_poklahsar = PelakuUsaha::where([
            ['jenis', '=', 1],
            ['kategori', '=', 'POKLAHSAR'],])->count();
        $p_pokdakan = PelakuUsaha::where([
            ['jenis', '=', 1],
            ['kategori', '=', 'POKDAKAN'],])->count();
        $p_kugar = PelakuUsaha::where([
            ['jenis', '=', 1],
            ['kategori', '=', 'KUGAR'],])->count();

        return view('pages.pendataan.index',
            compact('k_kub', 'k_poklahsar', 'k_pokdakan', 'k_kugar', 'p_kub',
             'p_poklahsar','p_pokdakan', 'p_kugar'));

    }

}
