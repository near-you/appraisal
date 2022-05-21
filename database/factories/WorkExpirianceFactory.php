<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\WorkExpiriance>
 */
class WorkExpirianceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'job_title' => $this->faker->jobTitle,
            'job_subtitle' => $this->faker->words(3, true),
            'from' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'to' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'job_description' => $this->faker->text(300),
        ];
    }
}
