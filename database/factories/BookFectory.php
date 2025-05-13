<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3),             // e.g., "The Silent World"
            'author' => $this->faker->name(),                 // e.g., "John Doe"
            'published_year' => $this->faker->year(),         // e.g., "2005"
        ];
    }
}
