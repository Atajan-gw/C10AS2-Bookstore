<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
use App\Models\Author;
use App\Models\Publisher;
use App\Models\Language;
use App\Models\Year;
use App\Models\Book;

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
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(3),
            'category_id' => Category::factory(),
            'author_id' => Author::factory(),
            'publisher_id' => Publisher::factory(),
            'language_id' => Language::factory(),
            'year_id' => Year::factory(),
            'page_number' => $this->faker->numberBetween(50, 1000),
            'code' => $this->faker->unique()->regexify('[A-Z]{3}-[0-9]{3}-[A-Z]{2}'),
        ];
    }
}
