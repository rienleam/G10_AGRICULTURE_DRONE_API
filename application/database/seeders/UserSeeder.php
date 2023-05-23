<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            ['name' => 'John', 'email' => 'john@gmail.com', 'password' => '12345678'],
            ['name' => 'Reen', 'email' => 'rien@gmail.com', 'password' => '111112222'],
            ['name' => 'Sreyrea', 'email' => 'sreyrea@gmail.com', 'password' => '11223344'],
            ['name' => 'Chamnan', 'email' => 'chamnan@gmail.com', 'password' => '88889999'],
            ['name' => 'Darath', 'email' => 'darath@gmail.com', 'password' => '22223333'],
        ];
        foreach ($users as $user){
            User::create($user);
        }
    }
}
