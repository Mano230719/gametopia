<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Support\Facades\Log;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Category::all();
        $subcategories = Subcategory::all();

        foreach ($categories as $category) {
            if ($subcategories->where('category_id', $category->id)->count() > 0) {
                $subcategories->where('category_id', $category->id)->each(function ($subcategory) use ($category) {
                    Product::factory()->count(16)->create([
                        'category_id' => $category->id,
                        'subcategory_id' => $subcategory->id,
                    ]);
                });
            } else {
                Product::factory()->count(16)->create([
                    'category_id' => $category->id,
                    'subcategory_id' => null,
                ]);
            }
        }
    }
}
