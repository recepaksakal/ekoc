<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Riders;
use App\Models\Contacts;
use App\Models\Emergencies;
use App\Models\Identities;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        Riders::factory(10)
        ->has(Contacts::factory(1))
        ->has(Emergencies::factory(1))
        ->has(Identities::factory(1))
        ->create();
    }
}
