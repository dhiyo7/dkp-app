<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PelakuUsaha;
use App\Penyuluh;

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
