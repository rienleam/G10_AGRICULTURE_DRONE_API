<?php

namespace Database\Seeders;

use App\Models\Instruction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InstructionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $instructions = [
            ['speed' => '60 kh/h', 'altitude' => '3000 meters', 'drone_id' => 1, 'plan_id' => 1],
            ['speed' => '70 kh/h', 'altitude' => '3200 meters', 'drone_id' => 2, 'plan_id' => 2],
            ['speed' => '65 kh/h', 'altitude' => '2000 meters', 'drone_id' => 3, 'plan_id' => 3],
            ['speed' => '80 kh/h', 'altitude' => '3500 meters', 'drone_id' => 4, 'plan_id' => 4],
            ['speed' => '50 kh/h', 'altitude' => '700 meters', 'drone_id' => 5, 'plan_id' => 5],
        ];
        foreach($instructions as $instruction){
            Instruction::create($instruction);
        }
    }
}
