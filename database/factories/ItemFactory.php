<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->word(),
            'description' => fake()->word(),
            'brand' => fake()->word(),
            'MFD' => fake()->date(),
            'EXP' => fake()->date(),
            'slug' => fake()->slug(),
            'state' => 'draft',
        ];
    }
}
