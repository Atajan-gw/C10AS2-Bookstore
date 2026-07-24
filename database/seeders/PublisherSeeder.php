<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Publisher;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $publishers = [
            'Penguin Random House',
            'HarperCollins',
            'Simon & Schuster',
            'Hachette Book Group',
            'Macmillan Publishers',
            'Scholastic Corporation',
            'Bloomsbury Publishing',
            'Oxford University Press',
            'Cambridge University Press',
            'Wiley'
        ];

        foreach ($publishers as $publisher) {
            Publisher::create(['name' => $publisher]);
        }
    }
}
