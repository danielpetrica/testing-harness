<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PluginVersionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\PluginVersion::factory(10)->create();
    }
}
