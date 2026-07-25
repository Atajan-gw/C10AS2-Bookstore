<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Category;
use App\Models\Author;
use App\Models\Publisher;
use App\Models\Language;
use App\Models\Year;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Category::all();
        $authors = Author::all();
        $publishers = Publisher::all();
        $languages = Language::all();
        $years = Year::all();

        for ($i = 0; $i < 1000; $i++) {
            Book::create([
                'name' => fake()->sentence(3),
                'category_id' => $categories->random()->id,
                'author_id' => $authors->random()->id,
                'publisher_id' => $publishers->random()->id,
                'language_id' => $languages->random()->id,
                'year_id' => $years->random()->id,
                'page_number' => fake()->numberBetween(50, 1000),
                'code' => fake()->unique()->regexify('[A-Z]{3}-[0-9]{3}-[A-Z]{2}'),
            ]);
        }
    }
}
