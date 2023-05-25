<?php

namespace App\Http\Controllers;

use App\Models\Instruction;
use App\Http\Requests\StoreInstructionRequest;
use App\Http\Requests\UpdateInstructionRequest;
use App\Http\Resources\InstructionResource;

class InstructionController extends Controller
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
    public function store(StoreInstructionRequest $request)
    {
        $instruction = Instruction::create([
            'speed' => $request->speed,
            'altitude' => $request->altitude,
            'action' => $request->action,
            'drone_id' => $request->drone_id,
            'plan_id' => $request->plan_id,
        ]);
        return response()->json(['message' => 'instruction create successfully', 'instruction' => new InstructionResource($instruction)]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Instruction $instruction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Instruction $instruction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInstructionRequest $request, $droneID)
    {
        $instruction = Instruction::find($droneID);
        $instruction->update([
            'speed' => $request->input('speed'),
            'altitude' => $request->input('altitude'),
            'action' => $request->input('action'),
            'drone_id' => $request->input('drone_id'),
            'plan_id' => $request->input('plan_id'),
        ]);
        return response()->json(['message' => 'instruction update successfully', 'instruction' => $instruction]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Instruction $instruction)
    {
        //
    }
}
