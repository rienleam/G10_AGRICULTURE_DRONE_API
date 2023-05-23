<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $plans = [
            ['plan_type' => 'Harvesting Plan', 'plan_details' => 'The drone will be used for harvesting crops, such as fruit or vegetables', 'user_id' => 1],
            ['plan_type' => 'Spraying Plan', 'plan_details' => 'The drone will be used for spraying pesticides, herbicides, or fertilizers on crops', 'user_id' => 2],
            ['plan_type' => 'Mapping Plan', 'plan_details' => 'The drone will be used for creating detailed maps of the crop field', 'user_id' => 3],
            ['plan_type' => 'Sensing Plan', 'plan_details' => 'The drone will be used for collecting data on crop health and growth', 'user_id' => 4],
            ['plan_type' => 'Harvesting Plan', 'plan_details' => 'The drone will be used for harvesting crops, such as fruit or vegetables', 'user_id' => 5],
        ];
        foreach ($plans as $plan){
            Plan::create($plan);
        }
    }
}
