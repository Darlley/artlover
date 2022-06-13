<?php

namespace Database\Seeders;

use Database\Factories\UserFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserFactory::new()->withPersonalTeam()->create([
            'name' => "Darlley",
            'email' => "darlleybrito@gmail.com",
            'password' => bcrypt('dev123'),
            'admin' => 1
        ]);
    }
}
