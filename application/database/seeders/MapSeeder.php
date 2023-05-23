<?php

namespace Database\Seeders;

use App\Models\Map;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $maps = [
            ['image' => 'https://img.freepik.com/premium-photo/bunch-grapes_694215-251.jpg?w=360', 'farm_id' => 1, 'drone_id' => 1],
            ['image' => 'https://dragonfruit.net.vn/wp-content/uploads/2021/11/song-nam-dragon-fruit-farm-99-1196x800.jpg', 'farm_id' => 2, 'drone_id' => 2],
            ['image' => 'https://t3.ftcdn.net/jpg/04/02/40/58/360_F_402405885_ukZ0bf9o1MXj6D2jmudY4ML41XVIkOSU.jpg', 'farm_id' => 3, 'drone_id' => 3],
            ['image' => 'https://phnompenhpost.com/sites/default/files/styles/full-screen/public/happy-farm-3.jpg?itok=DuEKNruk', 'farm_id' => 4, 'drone_id' => 4],
            ['image' => 'https://virginiatraveltips.com/wp-content/uploads/2022/06/Apple-Orchard_155143169.jpg', 'farm_id' => 5, 'drone_id' => 5],

        ];
        foreach ($maps as $map){
            Map::create($map);
        }
    }
}
