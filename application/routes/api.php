<?php

use App\Http\Controllers\DroneController;
use App\Http\Controllers\FarmerController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\InstructionController;
use App\Http\Controllers\MapController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->group(function () {
    // =============== Protected routes ==================
    // ------------------- farmer route --------------------------
    Route::prefix('/farmer')->group(function () {
        // farmer logout
        Route::post('/logout', [FarmerController::class, 'logout']);
    });

    // ------------------- maps route --------------------------
    Route::prefix('/maps')->group(function () {
        //list all map 
        Route::get('/', [MapController::class, 'index']);
        // get maps frome province name and farm id
        Route::get('/{province_name}/{farm_id}', [MapController::class, 'getMapFromeProvince']);
        // delete maps frome province name and farm id
        Route::delete('/{province_name}/{farm_id}', [MapController::class, 'deleteMapFromeFarm']);
        // add a new map into the farm
        Route::post('/', [MapController::class, 'store']);
    });

    // ------------------- Drone route --------------------------
    Route::prefix('/drones')->group(function () {
        // list all drone frome farmer
        Route::get('/from/{farmer_id}', [DroneController::class, 'getDroneFromFarmer']);
        // get specific drone
        Route::get('/{drone_id}', [DroneController::class, 'show']);
        // list all drone
        Route::get('/', [DroneController::class, 'index']);
        // location of the specific drone
        Route::get('/{drone_id}/location', [DroneController::class, 'droneLocation']);
        // update drone with id 
        Route::put('/{id}', [DroneController::class, 'update']);
        // run drone with id 
        Route::put('/instruct/{drone_id}', [InstructionController::class, 'update']);
    });

    // ------------------- Instructions Route -------------
    Route::prefix('/instructions')->group(function () {
        // create new instruction 
        Route::post('/', [InstructionController::class, 'store']);
        // list all instructions 
        Route::get('/{drone_id}', [InstructionController::class, 'index']);
    });

    // ------------------- plans route -------------
    Route::prefix('/plans')->group(function () {
        // create new plan 
        Route::post('/', [PlanController::class, 'store']);
        //get a spacific plan 
        Route::get('/{id}', [PlanController::class, 'show']);
    });
});

// ------------------- farmer route without protect --------------------------
Route::prefix('/farmer')->group(function () {
    Route::post('/register', [FarmerController::class, 'register']);
    Route::post('/login', [FarmerController::class, 'login']);
});
// ------------------- drone instructions -------------
Route::prefix('/instructions')->group(function () {
    // list all instructions 
    Route::get('/{drone_id}', [InstructionController::class, 'index']);
});
// ------------------- plans route -------------
Route::prefix('/plans')->group(function () {
    //get a spacific plan 
    Route::get('/{id}', [PlanController::class, 'show']);
});
// ------------------- maps route --------------------------
Route::prefix('/maps')->group(function () {
    // add a new map into the farm
    Route::post('/', [MapController::class, 'store']);
});
// ------------------- Drone route --------------------------
Route::prefix('/drones')->group(function () {
    // update drone with id 
    Route::put('/{id}', [DroneController::class, 'update']);
});
