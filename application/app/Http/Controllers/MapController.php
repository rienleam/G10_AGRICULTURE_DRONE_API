<?php

namespace App\Http\Controllers;

use App\Models\Map;
use App\Http\Requests\StoreMapRequest;
use App\Http\Requests\UpdateMapRequest;
use App\Http\Resources\MapsResource;
use App\Models\Province;

class MapController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $maps = Map::all();
        return response()->json(['success' => true, 'maps' => MapsResource::collection($maps)], 200);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMapRequest $request)
    {
        $map = Map::create($request->all());
        return response()->json(['success' => true,'message' => 'Create map successfully', 'map' => new MapsResource($map)], 201);

    }

    /**
     * Display the specified resource.
     */
    public function show(Map $map)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Map $map)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMapRequest $request, Map $map)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Map $map)
    {
        //
    }
    public function getMapFromeProvince(string $province_name, string $farm_id)
    {
        $province = Province::where('name', $province_name)->first();
        if (!isset($province)) {
            return response()->json(['success' => false, 'message' => "province name: " . $province_name . " doesn't exsit"], 401);
        }
        $farms = $province->farms->where('id', $farm_id)->first();
        if (empty($farms)) {
            return response()->json(['success' => false, 'message' => "farm id: " . $farm_id . " doesn't exsit"], 401);
        }
        return response()->json(['success' => true, 'message' => 'Request farm successfully', 'data' => MapsResource::collection($farms->maps)], 200);
    }

    public function deleteMapFromeFarm(string $province_name, string $farm_id)
    {

        $province = Province::where('name', $province_name)->first();
        if (!isset($province)) {
            return response()->json(['success' => false, 'message' => "province name: " . $province_name . " doesn't exsit"], 401);
        }
        $farms = $province->farms->where('id', $farm_id)->first();
        if (empty($farms)) {
            return response()->json(['success' => false, 'message' => "farm id: " . $farm_id . " doesn't exsit"], 401);
        }
        $maps = MapsResource::collection($farms->maps);
        if (!empty($maps->all())) {
            foreach ($maps as $map) {
                $map->delete();
            }
            return response()->json(['success' => true, 'message' => 'Maps has been deleted successfully'], 200);
        }
        return response()->json(['success' => false, 'message' => 'Nothing delete'], 401);
    }
}
