<?php

namespace App\Http\Controllers;

use App\Models\Instruction;
use App\Http\Requests\StoreInstructionRequest;
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
        if (empty($drone)) {
            return response()->json(['success' => false, 'message' => "Drone id: " . $drone_id . " doesn't exsit"], 401);
        }
        return response()->json(['success' => true, 'message' => 'list all instructions successfully', 'instructions' => InstructionResource::collection($drone->instructions)], 200);
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
    public function update(Request $request, $instruction_id)
    {
        $actionRequest = $request->only('action');
        $instruction = Instruction::find($instruction_id);
        if (empty($instruction)) {
            return response()->json(['success' => false, 'message' => "instrution id: " . $instruction_id . " doesn't exsit"], 401);
        }
        $instruction->update([
            'action' =>  $actionRequest['action'],
        ]);
        return response()->json(['success' => true, 'message' => 'instruction update successfully', 'instruction' => new InstructionResource($instruction)], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Instruction $instruction)
    {
        //
    }
}
