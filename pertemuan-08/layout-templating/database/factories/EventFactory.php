<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'slug' => fake()->slug(),
            'description' => fake()->paragraph(),
            'start_at' => fake()->dateTimeBetween('-1 month', '+1 month'),
            'end_at' => fake()->dateTimeBetween('-1 month', '+1 month'),
            'category_id' => fake()->numberBetween(1, 5),
        ];
    }
}
