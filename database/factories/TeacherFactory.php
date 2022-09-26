<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'last_name' => $this->faker->lastName(),
            'college_degree' => $this->faker->randomElement([10,20,30,40,50,60,70,80,90]),
            'age' => $this->faker->word(),
            'contract_date' => $this->faker->date('Y-m-d'),
            'imagen' => $this->faker->word(),
            'identity_document' => $this->faker->word(),
        ];
    }
}
