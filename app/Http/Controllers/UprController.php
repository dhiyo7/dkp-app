<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Upr;
use App\Penyuluh;
use DB;
use PDF;

class UprController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $uprs = Upr::all();
        return view('pages.upr.index', compact('uprs'));
    }

    public function create()
    {
        $penyuluh = Penyuluh::all();
        return view('pages.upr.addUpr', compact('penyuluh'));
    }

    public function store(Request $request)
    {
        Upr::create($request->all());
        return back()->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy(Upr $id)
    {
        $id->delete();

        return back()->with(['danger' => 'Data Berhasil Dihapus!']);
    }
}
