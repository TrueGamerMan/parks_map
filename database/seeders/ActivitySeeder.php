<?php

namespace Database\Seeders;

use App\Models\Activity;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Activity::create([
            'name' => 'Velopark'
        ]);
        
        Activity::create([
            'name' => 'Volleyball'
        ]);

        Activity::create([
            'name' => 'Football'
        ]);

        Activity::create([
            'name' => 'Basketball'
        ]);
        
        Activity::create([
            'name' => 'Tenis'
        ]);

        Activity::create([
            'name' => 'Badminton'
        ]);

        Activity::create([
            'name' => 'Beach'
        ]);

        Activity::create([
            'name' => 'Saktepark'
        ]);

        Activity::create([
            'name' => 'Workout zone'
        ]);

    }
}
