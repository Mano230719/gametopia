<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        // Delete all records from the categories table
        Category::query()->delete();

        // Reset the auto-increment value to 1
        DB::statement('ALTER TABLE categories AUTO_INCREMENT = 1');

        // Define categories data
        $categories = [
            'pc-games',
            'pc-components',
            'console-games',
            'boardgames',
        ];

        // Seed categories
        foreach ($categories as $category) {
            Category::create([
                'category_name' => $category,
            ]);
        }
    }
}
