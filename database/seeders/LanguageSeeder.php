<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Language;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $languages = [
            'English',
            'Spanish',
            'French',
            'German',
            'Italian',
            'Portuguese',
            'Russian',
            'Chinese',
            'Japanese',
            'Korean'
        ];

        foreach ($languages as $language) {
            Language::create(['name' => $language]);
        }
    }
}
