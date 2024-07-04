<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BlogCategory;
use Illuminate\Support\Facades\DB;

class BlogCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Delete all records from the blog_categories table
        BlogCategory::query()->delete();

        // Reset the auto-increment value to 1
        DB::statement('ALTER TABLE blog_categories AUTO_INCREMENT = 1');

        // Define categories data as an array of names
        $categories = [
            'pc-games',
            'pc-components',
            'console-games',
            'boardgames',
        ];

        // Insert categories into the database using create() for each category
        foreach ($categories as $categoryName) {
            BlogCategory::create(['blog_category_name' => $categoryName]);
        }
    }
}
