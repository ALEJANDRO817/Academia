<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'document_type' => $this->faker->randomElement(['CC', 'TI', 'CE']),
            'document_number' => $this->faker->randomElement([123456789, 987654321]),
            'identify_document' => $this->faker->word(),
            'expedition_date' => $this->faker->date(),
            'id_issuing_municipalityy' => $this->faker->randomElement([1,2,3,4,5,6]),
            'name' => $this->faker->name(),
            'first_last_name' => $this->faker->lastName(),
            'second_last_name' => $this->faker->lastName(),
            'gender' => $this->faker->randomElement(['M', 'F']),
            'birth_date' => $this->faker->date(),
            'birth_municipality' => $this->faker->randomElement([1,2,3,4,5,6]),
            'stratum' => $this->faker->randomElement([1,2,3,4,5,6]),
            'id_course' => $this->faker->randomElement([1,2,3,4,5,6]),
        ];
    }
}
