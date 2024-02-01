<?php

namespace Database\Factories;

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BooksFactory extends Factory
{
  public function definition(): array
  {
      return [
        'title' => fake()->sentence,
        'desc' => fake()->paragraph,
        'writer' => fake()->name,
        'size_book' => fake()->randomNumber(2),
        'book_page' => fake()->numberBetween(50, 1000), // Adjust the range as needed
        'years' => fake()->numberBetween(1900, 2022), // Adjust the range as needed
        'isbn' => fake()->isbn13,
        'image_featured' => fake()->imageUrl(),
        'tag' => fake()->word,
        'created_at' => now(),
        'updated_at' => now(),
      ];
  }
}

