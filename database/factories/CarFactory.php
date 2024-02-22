<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => 1,
            'brand' => $this->faker->name,
            'model' => $this->faker->name,
            'year' => $this->faker->year,
            'power' => $this->faker->randomNumber(3),
            'torque' => $this->faker->randomNumber(3),
            'weight' => $this->faker->randomNumber(3)
        ];
    }
}
