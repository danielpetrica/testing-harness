<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PluginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Plugin::factory(10)->create();
    }
}
