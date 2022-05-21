<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Skill>
 */
class SkillFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'technical_skills' => $this->faker->words(3, true),
            'technical_skills_desc' => $this->faker->text(100),
            'soft_skills' => $this->faker->words(3, true),
            'soft_skills_desc' => $this->faker->text(100),
        ];
    }
}
