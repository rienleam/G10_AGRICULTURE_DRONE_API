<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Http\Requests\StorePlanRequest;
use App\Http\Requests\UpdatePlanRequest;
use App\Http\Resources\PlanResource;
use PHPUnit\TextUI\XmlConfiguration\Validator;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StorePlanRequest $request)
    {
        $plan = Plan::create([
            'plan_type' => $request->plan_type,
            'plan_details' => $request->plan_details,
            'user_id' => $request->user_id,
        ]);
        return response()->json(['success' => true , 'message' => 'plan create successfully', 'plan' => new PlanResource($plan)],200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $plan = Plan::find($id);
        if (empty($plan)){
            return response()->json(['success' => false, 'message' => 'Undefined plan id:'. $id. ''],401);
        }
        return response()->json(['success' => true , 'message' => 'plan create successfully', 'plan' => new PlanResource($plan)],200);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Plan $plan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePlanRequest $request, Plan $plan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Plan $plan)
    {
        //
    }
}
