<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExtraRequest;
use App\Extra;

class ExtraController extends Controller
{
    public function index()
    {
        $extras = Extra::latest()->get();

        return response()->json($extras);
    }

    public function store(ExtraRequest $request)
    {
        $extra = Extra::create($request->all());

        return response()->json($extra, 201);
    }

    public function show($id)
    {
        $extra = Extra::findOrFail($id);

        return response()->json($extra);
    }

    public function update(ExtraRequest $request, $id)
    {
        $extra = Extra::findOrFail($id);
        $extra->update($request->all());

        return response()->json($extra, 200);
    }

    public function destroy($id)
    {
        Extra::destroy($id);

        return response()->json(null, 204);
    }
}