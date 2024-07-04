<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SetupCategory;
use Illuminate\Support\Facades\DB;

class SetupCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Delete all records from the pc_setup_categories table
        SetupCategory::query()->delete();

        // Reset the auto-increment value to 1
        DB::statement('ALTER TABLE setup_categories AUTO_INCREMENT = 1');

        $categories = [
            'gaming-setups',
            'home-office-setups',
            'content-creation-setups',
            'minimalist-setups',
        ];

        foreach ($categories as $categoryName) {
            SetupCategory::create(['setup_category_name' => $categoryName]);
        }
    }
}
