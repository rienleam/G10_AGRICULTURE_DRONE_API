<?php

namespace Database\Seeders;

use App\Models\Farm;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FarmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $farms = [
            ['name' => 'Coconut Farm', 'location' => '', 'size' => '10 hectare', 'province_id' => 1],
            ['name' => 'Dragon Fruit Farm', 'location' => '', 'size' => '6 hectare', 'province_id' => 2],
            ['name' => 'Apple Farm', 'location' => '', 'size' => '3 hectare', 'province_id' => 3],
            ['name' => 'Graps Farm', 'location' => '', 'size' => '8 hectare', 'province_id' => 4],
            ['name' => 'Vegetable Farm', 'location' => '', 'size' => '12 hectare', 'province_id' => 5],
        ];
        foreach ($farms as $farm){
            Farm::create($farm);
        }
    }
}
