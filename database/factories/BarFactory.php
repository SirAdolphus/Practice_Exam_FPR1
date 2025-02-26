<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bar>
 */
class BarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'waldo' => $this->faker->name(),
            'grault' => $this->faker->numberBetween(1,10),
            'created_at' => $this->faker->dateTimeBetween('-1 years', 'now'),
        ];
    }
}
