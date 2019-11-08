<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JenisOlahan;

class JenisOlahanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $olahans = JenisOlahan::all();
        return view('pages.olahan.index', compact('olahans'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        JenisOlahan::create($request->all());
        return back()->with(['success' => 'Data Berhasil Disimpan!']);
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy(JenisOlahan $id)
    {
        $id->delete();

        return back()->with(['danger' => 'Data Berhasil Dihapus!']);
    }
}
