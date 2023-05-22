<?php

namespace Database\Seeders;

use App\Models\Team;
use App\Models\User;
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
        $user = User::factory()->create([
            'name' => 'Darlley Brito',
            'email' => 'darlleybrito@gmail.com',
            'password' => bcrypt('123456789')
        ]);
        $team = Team::factory()
            ->hasAttached($user)
            ->create([
                'user_id' => $user
            ]);
        $user->switchTeam($team);
    }
}
