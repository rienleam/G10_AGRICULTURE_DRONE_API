<?php

namespace Database\Seeders;

use App\Models\Drone;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DroneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $drones = [
            ['name' => 'DJI Phantom 4 Pro', 'drone_type' => 'Harvesting', 'battery_status' => 90, 'payload_capacity' => '10 kilograms', 'current_latitude' => '40.7128° N', 'current_longitude' => '74.0060° W'],
            ['name' => 'Parrot Anafi USA', 'drone_type' => 'Mapping', 'battery_status' => 70, 'payload_capacity' => '5 kilograms', 'current_latitude' => '34.0522° N', 'current_longitude' => '118.2437° W'],
            ['name' => 'Autel Robotics EVO II', 'drone_type' => 'Sensing', 'battery_status' => 75, 'payload_capacity' => '3 kilograms', 'current_latitude' => '51.5074° N', 'current_longitude' => '0.1278° W'],
            ['name' => 'Yuneec Typhoon H Pro', 'drone_type' => 'Mapping', 'battery_status' => 85, 'payload_capacity' => '6 kilograms', 'current_latitude' => '19.4326° N', 'current_longitude' => '99.1332° E'],
            ['name' => 'DJI Matrice 300 RTK', 'drone_type' => 'Spraying', 'battery_status' => 80, 'payload_capacity' => '2.7 kilograms', 'current_latitude' => '35.6895° N', 'current_longitude' => '139.6917° E'],
        ];
        foreach ($drones as $drone){
            Drone::create($drone);
        }
    }
}
