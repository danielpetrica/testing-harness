<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PluginVersion>
 */
class PluginVersionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'version' => fake()->text(50),
            'composer_json' => fake()->text(500),
            'package_json' => fake()->text(500),
            'major_changes' => fake()->text(500),
            'release_notes_url' => fake()->text(50),
            'release_date' => now()->subDay(),
            'download_count' => fake()->numberBetween(0, 1000000),

        ];
    }
}
