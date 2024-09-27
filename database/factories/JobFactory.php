<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $type = fake()->randomElement(['Male', 'Femelle']);
        return [
            'title' => fake()->name,
            'description' => fake()->text,
            'category_id' => rand(1, 9),
            'job_type_id' => rand(1, 6),
            'user_id' => rand(2, 30),
            'salary' => rand(100, 10000),
            'experience' => rand(1, 10),
            'genre' => $type,
            'date_limite' => fake()->date('Y-m-d'),
            'country' => fake()->country,
            'city' => fake()->city,
            'address' => fake()->address,
            'company_website' => fake()->url,
            'company_email' => fake()->email,
            'company_name' => fake()->name,
            'company_location' => fake()->address,
        ];
    }
}
