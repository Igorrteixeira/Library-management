<?php

namespace Database\Factories;

use App\Models\Genre;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $registration = rand(30100,30500);

        return [
            'genre_id'=> Genre::all()->random()->id,
            'book_name' => fake()->word(),
            'author' => fake()->name(),
            'available' => false,
            'book_registration' => $registration,

        ];
    }
}
