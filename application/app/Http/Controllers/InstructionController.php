<?php

namespace App\Http\Controllers;

use App\Models\Instruction;
use App\Http\Requests\StoreInstructionRequest;
use App\Http\Requests\UpdateInstructionRequest;
use App\Http\Resources\InstructionResource;
use Illuminate\Http\Request;

class InstructionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $instructions = Instruction::all();
        return response()->json(['success' => true, 'message' => 'List all instructions successfully', 'instructions' => InstructionResource::collection($instructions)], 200);
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
    public function update(Request $request, $droneID)
    {   $actionRequest =$request->only('action');
        $instruction = Instruction::find($droneID);
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
