<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Visitor>
 */
class VisitorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'signature' => fake()->text(50),
            'browser' => fake()->text(50),
            'operating_system' => fake()->text(50),
            'country' => fake()->text(50),
            'device_type' => fake()->text(50),

        ];
    }
}
