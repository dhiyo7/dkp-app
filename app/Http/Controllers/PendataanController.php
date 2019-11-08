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


    public function create()
    {
        $penyuluh = Penyuluh::all();
        return view('pages.pendataan.addPud', compact('penyuluh'));
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
