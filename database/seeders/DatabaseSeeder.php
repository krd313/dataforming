<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        \App\Models\State::factory(10)->create();

        \App\Models\State::factory()->create([
            'state' => 'ACT',
            'state' => 'NT',
            'state' => 'Vic',
            'state' => 'NSW',
            'state' => 'Tas',
            'state' => 'QLD',

        ]);


        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
