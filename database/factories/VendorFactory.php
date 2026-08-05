<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vendor>
 */
class VendorFactory extends Factory
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
            'url_github' => fake()->text(50),
            'url_website' => fake()->text(50),
            'url_likedin' => fake()->text(50),
            'url_other' => [],
            'contact_email' => fake()->text(50),
            'is_verified' => fake()->boolean(),

        ];
    }
}
