<?php

namespace App\Http\Controllers;

use App\Http\Requests\IncludedRequest;
use App\Included;

class IncludedController extends Controller
{
    public function index()
    {
        $includeds = Included::latest()->get();

        return response()->json($includeds);
    }

    public function store(IncludedRequest $request)
    {
        $included = Included::create($request->all());

        return response()->json($included, 201);
    }

    public function show($id)
    {
        $included = Included::findOrFail($id);

        return response()->json($included);
    }

    public function update(IncludedRequest $request, $id)
    {
        $included = Included::findOrFail($id);
        $included->update($request->all());

        return response()->json($included, 200);
    }

    public function destroy($id)
    {
        Included::destroy($id);

        return response()->json(null, 204);
    }
}