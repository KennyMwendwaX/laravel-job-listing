<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3),
            'salary' => $this->faker->numberBetween(20000, 120000),
            'company' => $this->faker->company(),
            'email' => $this->faker->companyEmail(),
            'tags' => $this->faker->randomElement(['laravel,api,backend', 'apache,api,backend', 'nest,javascript,frontend']),
            'website' => $this->faker->url(),
            'location' => $this->faker->city(),
            'schedule' => $this->faker->randomElement(['Full time', 'Part time', 'Contract', 'Internship']),
            'status' => $this->faker->randomElement(['On site', 'Remote', 'Hybrid']),
            'description' => $this->faker->paragraph(5),
        ];
    }
}
