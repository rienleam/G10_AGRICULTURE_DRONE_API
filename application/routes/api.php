<?php

use App\Http\Controllers\DroneController;
use App\Http\Controllers\FarmerController;
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
    // Protected routes

    //farmer
    Route::prefix('/farmer')->group(function () {
        // ------------------- farmer route -------------
        Route::post('/logout', [FarmerController::class, 'logout']);
        // list all drone frome farmer
        Route::get('/drones/from/{farmer_id}', [DroneController::class, 'getDroneFromFarmer']);
        // get specific drone
        Route::get('/drones/{drone_id}', [DroneController::class, 'show']);
        // list all drone
        Route::get('/drones', [DroneController::class, 'index']);
        // location of the specific drone
        Route::get('/drones/{drone_id}/location', [DroneController::class, 'droneLocation']);
        //list all map 
        Route::get('/maps', [DroneController::class, 'listAllmaps']);
    });
    // drone
    Route::prefix('/drone')->group(function () {

        // ------------------- drone route -------------
    });
});

Route::prefix('/farmer')->group(function () {
    Route::post('/register', [FarmerController::class, 'register']);
    Route::post('/login', [FarmerController::class, 'login']);
});
