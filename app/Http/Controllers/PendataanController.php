<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penyuluh;
use App\AssetPelakuUsaha;
use App\KomoditasPelakuUsaha;
use App\PelakuUsaha;
use App\PengurusPendataan;
use App\ProduksiPerBulan;
use App\SumberBahanBaku;


class PendataanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('pages.pendataan.index');
    }


}
