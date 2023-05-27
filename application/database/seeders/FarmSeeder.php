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
            ['name' => 'Coconut Farm', 'location' => 'Chamkar Mon District: Road 271, Road 264, Norodom Boulevard', 'size' => '10 hectare', 'province_id' => 1],
            ['name' => 'Dragon Fruit Farm', 'location' => 'Daun Penh District: Preah Monivong Boulevard, Preah Sisowath Quay, Street 106', 'size' => '6 hectare', 'province_id' => 2],
            ['name' => 'Apple Farm', 'location' => 'Prampi Makara District: Mao Tse Toung Boulevard, Russian Federation Boulevard', 'size' => '3 hectare', 'province_id' => 3],
            ['name' => 'Graps Farm', 'location' => 'Mean Chey District: Veng Sreng Boulevard, National Road 4, National Road 3', 'size' => '8 hectare', 'province_id' => 4],
            ['name' => 'Vegetable Farm', 'location' => 'Russei Keo District: National Road 5, National Road 6, Kob Srov Street', 'size' => '12 hectare', 'province_id' => 5],
        ];
        foreach ($farms as $farm){
            Farm::create($farm);
        }
    }
}
