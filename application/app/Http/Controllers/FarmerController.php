<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginFarmerRequest;
use App\Http\Requests\StoreFarmRequest;
use App\Http\Resources\FarmerResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class FarmerController extends Controller
{
    public function register(StoreFarmRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $token = $user->createToken('token-name', ['post', 'get', 'update', 'delete'])->plainTextToken;
        return response()->json(['message' => 'register successfully', 'token' => $token, 'farmer' => new FarmerResource($user)]);
    }


    public function login(LoginFarmerRequest $request)
    {
        $cridentail = $request->only('email', 'password');
        if (Auth::attempt($cridentail)) {
            $user = Auth::user();
            $token = $user->createToken('token-name')->plainTextToken;
            return response()->json(['message' => 'login successfully', 'token' => $token, 'farmer' => new FarmerResource($user)]);
        }
        return response()->json(['message' => 'login failed'], 401);
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return response()->json(['message' => 'Logged out successfully']);
    }
}
