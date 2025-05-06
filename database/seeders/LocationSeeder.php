<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Vehicule::all()->each(function ($vehicule) {
            \App\Models\Location::factory([
                "vehicule_id" => $vehicule->id,
            ])->count(3)->create();
        });
    }
}
