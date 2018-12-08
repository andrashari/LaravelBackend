<?php

namespace App\Http\Controllers;

use App\Http\Requests\SpecificationRequest;
use App\Specification;

class SpecificationController extends Controller
{
    public function index()
    {
        $specifications = Specification::latest()->get();

        return response()->json($specifications);
    }

    public function store(SpecificationRequest $request)
    {
        $specification = Specification::create($request->all());

        return response()->json($specification, 201);
    }

    public function show($id)
    {
        $specification = Specification::findOrFail($id);

        return response()->json($specification);
    }

    public function update(SpecificationRequest $request, $id)
    {
        $specification = Specification::findOrFail($id);
        $specification->update($request->all());

        return response()->json($specification, 200);
    }

    public function destroy($id)
    {
        Specification::destroy($id);

        return response()->json(null, 204);
    }
}