<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Village;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Eyce>
 */
class EyceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'bio' => fake()->realText(500),
            'skill' => fake()->numberBetween(0, 100),
            'village_id' => Village::inRandomOrder()->first()->id,
        ];
    }
}
