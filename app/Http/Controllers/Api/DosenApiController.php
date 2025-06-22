<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dosen;

class DosenApiController extends Controller
{
    public function create(Request $request)
    {
        return Dosen::create($request->all());
    }

    public function read()
    {
        return Dosen::all();
    }

    public function update(Request $request)
    {
        $data = Dosen::findOrFail($request->id);
        $data->update($request->all());
        return $data;
    }

    public function delete(Request $request)
    {
        $data = Dosen::findOrFail($request->id);
        $data->delete();
        return response()->json(['message' => 'deleted']);
    }
}
