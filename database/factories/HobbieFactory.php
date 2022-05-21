<?php

namespace Database\Factories;

use App\Models\Hobbie;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hobbie>
 */
class HobbieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'hobbies_title' => $this->faker->words(2, true),
        ];
    }
}
