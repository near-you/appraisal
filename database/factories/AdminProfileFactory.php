<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AdminProfile>
 */
class AdminProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "name" => $this->faker->firstName($gender = 'male'|'female'),
            "surname" => $this->faker->lastName(),
            "age" => $this->faker->numberBetween($min = 20, $max = 40),
            "education" => $this->faker->sentence($nbWords = 4, $variableNbWords = true),
            "city" => $this->faker->city(),
            "technical_skills" => $this->faker->text($maxNbChars = 400),
            "soft_skills" => $this->faker->text($maxNbChars = 400),
        ];
    }
}
