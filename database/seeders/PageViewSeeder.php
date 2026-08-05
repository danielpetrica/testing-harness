<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PageViewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\PageView::factory(10)->create();
    }
}
