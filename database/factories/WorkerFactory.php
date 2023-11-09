<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Worker>
 */
class WorkerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->name(),
            'middle_name' => fake()->lastName(),
            'extension_name' => fake()->suffix(),
            'birthdate' => fake()->date($format = 'Y-m-d', $max = 2004),
            'age' => fake()->numberBetween($min = 20, $max = 50),
            'gender' => fake()->randomElement(['Male', 'Female']),
            'status' => fake()->randomElement(['Regular', 'Probationary']),
            'position' => fake()->randomElement(['Sheller', 'Parer', 'Hourly']),
            'date_of_employment' => fake()->date($format = 'Y-m-d', $max = 'now'),
            'rehired_date' => fake()->date($format = 'Y-m-d', $max = 'now'),
            'year_hired' => fake()->year($max = 'now'),
            'address' => fake()->address(),
            'employment_status' => fake()->randomElement(['Active', 'AWOL', 'Resigned', 'Terminated']),
            'date_inactive' => fake()->date($format = 'Y-m-d', $max = 'now'),
            'shift' => fake()->randomElement(['Green', 'Red', 'Yellow']),
        ];
    }
}
