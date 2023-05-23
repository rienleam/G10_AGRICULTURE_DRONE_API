<?php

namespace Database\Seeders;

use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $provinces = [
            ['name' => 'Siem Reap', 'user_id' => 1],
            ['name' => 'Kompong Thom', 'user_id' => 2],
            ['name' => 'Kompong Cham', 'user_id' => 3],
            ['name' => 'Banteaymeanchey', 'user_id' => 4],
            ['name' => 'Preah Vihear', 'user_id' => 5],
        ];
        foreach ($provinces as $province){
            Province::create($province);
        }
    }
}
