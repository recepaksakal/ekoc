<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Riders;
use App\Models\Contacts;
use App\Models\Emergencies;
use App\Models\Identities;
use App\Models\Levels;
use App\Models\Missions;


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
        $levels = ["Misafir", "Support", "Hangaround", "Prospect", "Full Patch", "2.Yıl Kıdem", "5.Yıl Kıdem", "10.Yıl Kıdem"];
        foreach ($levels as $level) {
            $rec = new Levels;
            $rec->level = $level;
            $rec->save();
        }
        $missions = ["Başkan", "Koordinatör", "Koç", "Disiplin", "Sayman", "Yol Kaptanı", "Çoban", "Artçı", "Sıhhiye", "Mekanik"];
        foreach ($missions as $mission) {
            $rec = new Missions;
            $rec->mission = $mission;
            $rec->save();
        }
    }
}
