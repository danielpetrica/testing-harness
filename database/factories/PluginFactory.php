<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Plugin>
 */
class PluginFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->text(50),
            'github_id' => fake()->text(50),
            'slug' => fake()->text(500),
            'description' => fake()->text(500),
            'packagist_url' => fake()->text(50),
            'type' => fake()->text(50),
            'current_version_id' => fake()->text(50),
            'next_scan_at' => now()->addDay(),

        ];
    }
}
