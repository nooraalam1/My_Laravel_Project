<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->name(),
            'description' => fake()->name(),
            'price' => fake()->numberBetween(100,10000),
            'category' => fake()->randomElement(['Menz','Kidz','Boyz','Female']),
            'quantity' => fake()->numberBetween(1,100),

        ];
    }
}
