<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setup;
use App\Models\SetupCategory;

class SetupController extends Controller
{
    public function showSetup()
    {
        $setups = Setup::all();
        return view('setup', compact('setups'));
    }

    public function showCategory($category)
    {
        // Find the category by its name
        $setupCategory = SetupCategory::where('setup_category_name', $category)->first();

        // Fetch all blog posts under this category
        $setups = Setup::where('setup_category_id', $setupCategory->id)
                    ->get();

        return view('setup-category', compact('setups', 'setupCategory'));
    }
}
