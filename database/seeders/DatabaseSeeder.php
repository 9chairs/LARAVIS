<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Universe;
use App\Models\Planet;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $Universe = Universe::factory()->create();
        Planet::factory(rand(10,20))->create([
            'universe_id' => $Universe
        ]);
    }
}
