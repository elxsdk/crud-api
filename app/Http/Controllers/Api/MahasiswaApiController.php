<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaApiController extends Controller
{
    public function create(Request $request)
    {
        return Mahasiswa::create($request->all());
    }

    public function read()
    {
        return Mahasiswa::all();
    }

    public function update(Request $request)
    {
        $data = Mahasiswa::findOrFail($request->id);
        $data->update($request->all());
        return $data;
    }

    public function delete(Request $request)
    {
        $data = Mahasiswa::findOrFail($request->id);
        $data->delete();
        return response()->json(['message' => 'deleted']);
    }
}
