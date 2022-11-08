<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstNameMale,
            'last_name' => $this->faker->lastName,
            'job_title' => $this->faker->jobTitle,
            'birthday' => $this->faker->date('Y-m-d', 'now'),
            'description' => $this->faker->text(300),
            'img' => $this->faker->image(storage_path('app/public/images'), 100, 100, null, false),
            'page_views_counter' => 0,
        ];
    }
}
