<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {

        return [
            'name' => $this->faker->name,
            'hiring_date' => $this->faker->date(),
            'job' => $this->faker->randomElement([1, 2, 3, 4]),
            'notes' => $this->faker->text(100),
        ];
    }
}
