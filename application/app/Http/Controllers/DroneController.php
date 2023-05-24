<?php

namespace App\Http\Controllers;

use App\Models\Drone;
use App\Http\Requests\StoreDroneRequest;
use App\Http\Requests\UpdateDroneRequest;
use App\Http\Resources\DroneLocationResource;
use App\Http\Resources\DronesResource;
use App\Http\Resources\FarmerDroneResource;
use App\Http\Resources\MapsResource;
use App\Models\Map;
use App\Models\User;

class DroneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $drones = Drone::all();
        return response()->json(['success' => true, 'message' => 'List all drone successfully', 'drones' => DronesResource::collection($drones)], 200);
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
    public function store(StoreDroneRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $drone_id)
    {

        $drone = Drone::find($drone_id);
        if (!isset($drone)) {
            return response()->json(['success' => false, 'drones' => "Drone id: " . $drone_id . " doesn't exsit"], 401);
        }
        return response()->json(['success' => true, 'drones' => new DronesResource($drone)], 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Drone $drone)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDroneRequest $request, Drone $drone)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Drone $drone)
    {
        //
    }

    public function getDroneFromFarmer(string $farmer_id)
    {
        $farmer = User::find($farmer_id);
        if (!isset($farmer)) {
            return response()->json(['success' => false, 'drones' => "Farmer id: " . $farmer_id . " doesn't exsit"], 401);
        }
        return response()->json(['success' => true, 'message' => 'List all drone from farmer id: ' . $farmer_id . ' successfully', 'Farmer' => new FarmerDroneResource($farmer)], 200);
    }

    public function droneLocation(string $drone_id)
    {
        $drone = Drone::find($drone_id);
        if (!isset($drone)) {
            return response()->json(['success' => false, 'drones' => "Drone id: " . $drone_id . " doesn't exsit"], 401);
        }
        return response()->json(['success' => true, 'drone' => new DroneLocationResource($drone)], 200);
    }

    public function listAllmaps(){
        $maps = Map::all();
        return response()->json(['success' => true, 'maps' => MapsResource::collection($maps)], 200);
    }
}
