<?php

namespace App\Http\Controllers;

use App\Models\Instruction;
use App\Http\Requests\StoreInstructionRequest;
use App\Http\Requests\UpdateInstructionRequest;
use App\Http\Resources\InstructionResource;
use App\Models\Drone;
use Illuminate\Http\Request;

class InstructionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($drone_id)
    {
        $drone = Drone::find($drone_id);
        return response()->json(['success' => true, 'message' => 'List all instructions succes/sfully', 'instructions' => InstructionResource::collection($drone->instructions)], 200);
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
            'datetime' => $request->datetime,
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
    public function update(Request $request, $drone_id)
    {   $actionRequest =$request->only('action');
        $instruction = Instruction::find($drone_id);
        $instruction->update([
            'action' =>  $actionRequest,
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
