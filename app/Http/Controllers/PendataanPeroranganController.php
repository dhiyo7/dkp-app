<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendataanPeroranganController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('pages.pendataan.perorangan.index');
    }


    public function create()
    {
        return view('pages.pendataan.perorangan.addPerorangan');
    }

    public function store(Request $request)
    {
        //
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

    public function destroy($id)
    {
        //
    }
}