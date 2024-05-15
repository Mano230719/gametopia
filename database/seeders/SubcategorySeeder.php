<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subcategory;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Delete all records from the subcategories table
        Subcategory::query()->delete();

        // Reset the auto-increment value to 1
        DB::statement('ALTER TABLE subcategories AUTO_INCREMENT = 1');

        // Define subcategories data
        $subcategories = [
            'pc-components' => ['motherboards', 'graphics-cards', 'processors', 'ram'],
            'console-games' => ['playstation', 'xbox'],
        ];

        // Seed subcategories
        foreach ($subcategories as $categoryName => $subcategoryNames) {
            $category = Category::where('category_name', $categoryName)->first();
            if ($category) {
                foreach ($subcategoryNames as $subcategoryName) {
                    Subcategory::create([
                        'sub_category_name' => $subcategoryName,
                        'category_id' => $category->id,
                    ]);
                }
            }
        }
    }
}
