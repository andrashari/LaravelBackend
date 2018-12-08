<?php

namespace App\Http\Controllers;

use App\Http\Requests\CamperRequest;
use App\Camper;

class CamperController extends Controller
{
    public function index()
    {
        $campers = Camper::latest()->get();

        return response()->json($campers);
    }

    public function store(CamperRequest $request)
    {
        $camper = Camper::create($request->all());

        return response()->json($camper, 201);
    }

    public function show($id)
    {
        $camper = Camper::findOrFail($id);

        return response()->json($camper);
    }

    public function update(CamperRequest $request, $id)
    {
        $camper = Camper::findOrFail($id);
        $camper->update($request->all());

        return response()->json($camper, 200);
    }

    public function destroy($id)
    {
        Camper::destroy($id);

        return response()->json(null, 204);
    }
}