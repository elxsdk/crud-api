<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Makul;

class MakulApiController extends Controller
{
    public function create(Request $request)
    {
        return Makul::create($request->all());
    }

    public function read()
    {
        return Makul::all();
    }

    public function update(Request $request)
    {
        $data = Makul::findOrFail($request->id);
        $data->update($request->all());
        return $data;
    }

    public function delete(Request $request)
    {
        $data = Makul::findOrFail($request->id);
        $data->delete();
        return response()->json(['message' => 'deleted']);
    }
}
