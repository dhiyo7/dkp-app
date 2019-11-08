<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penyuluh;

class PenyuluhController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $penyuluh = Penyuluh::all();
        return view('pages.penyuluh.index', compact('penyuluh'));
    }

    public function store(Request $request)
    {
        Penyuluh::create($request->all());
        return back();
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

    public function destroy(Penyuluh $id)
    {
        $id->delete();

        return back();
    }
}
