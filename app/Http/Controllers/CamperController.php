<?php

namespace App\Http\Controllers;

use App\Http\Requests\CamperRequest;
use App\Camper;

class CamperController extends Controller
{
    /* TODO Securing the API endpoints
     * https://blog.pusher.com/build-rest-api-laravel-api-resources/
    */

    /*public function __construct()
    {
        $this->middleware('auth:api')->except(['index', 'show']);
    }*/

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

    /**
     * Get images by camper id.
     */

    public function images($id)
    {
        $images = Camper::find($id)->images;

        return response()->json($images);
    }

    /**
     * Get extras by camper id.
     */

    public function extras($id)
    {
        $extras = Camper::find($id)->extras;

        return response()->json($extras);
    }

    /**
     * Get specifications by camper id.
     */

    public function specifications($id)
    {
        $specifications = Camper::find($id)->specifications;

        return response()->json($specifications);
    }

    /**
     * Get includeds by camper id.
     */

    public function includeds($id)
    {
        $includeds = Camper::find($id)->includeds;

        return response()->json($includeds);
    }
}