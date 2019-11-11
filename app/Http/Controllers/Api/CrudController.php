<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Test;

class CrudController extends Controller
{
    public function index(){

        $tests = Test::all();

        return response()->json([
            'message' => 'Data test',
            'status' => true,
            'data' => $tests,
        ], 200);
    }

    public function store(Request $request){

        $tests = Test::create([
            'title' => $request->title,
            'description' => $request->description
        ]);

        return response()->json([
            'message' => 'Berhasil ditambah',
            'status' => true,
            'data' => $tests,
        ], 200);
    }

    public function update(Request $request, $id){

        $tests = Test::find($id);

        $tests->update([
            'title'     => $request->title,
            'description'   => $request->description,
          ]);

          return response()->json([
            'message' => 'Berhasil diupdate',
            'status' => true,
            'data' => $tests,
          ], 200);
    }

    public function destroy(Test $id){

        $id->delete();

        return response()->json([
            'message' => 'Berhasil diupdate',
            'status' => true,
          ], 200);
    }
}
