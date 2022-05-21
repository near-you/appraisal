<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Education>
 */
class EducationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'specialty' => $this->faker->words(3, true),
            'college_name' => $this->faker->words(3, true),
            'from' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'to' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
        ];
    }
}
