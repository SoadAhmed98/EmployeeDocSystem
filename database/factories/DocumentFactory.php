<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Document>
 */
class DocumentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $issue_date = $this->faker->date();

        return [
            'employee_id' => Employee::all()->random()->employee_id,
            'document_type' => $this->faker->randomElement([1, 2, 3]),
            'issue_date' => $issue_date,
            'expire_date' => $this->faker->optional()->dateTimeBetween($issue_date, '+5 years'),
            'notes' => $this->faker->optional()->sentence(),
        ];
    }
}
