<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Product;

class ShopController extends Controller
{
    public function showShop()
    {
        // Fetching products for each category
        $pcGames = Category::where('category_name', 'pc-games')->first()->products()->limit(10)->get();
        $pcComponents = Category::where('category_name', 'pc-components')->first()->products()->limit(10)->get();
        $consoleGames = Category::where('category_name', 'console-games')->first()->products()->limit(10)->get();
        $boardGames = Category::where('category_name', 'boardgames')->first()->products()->limit(10)->get();

        return view('shop', compact('pcGames', 'pcComponents', 'consoleGames', 'boardGames'));
    }

    public function showCategory($category)
    {
        // Retrieve category details
        $category = Category::where('category_name', $category)->firstOrFail();

        // Retrieve products associated with the category
        $products = $category->products()->paginate(10);

        // Pass products to the view
        return view('category', compact('category', 'products'));
    }

    public function showSubcategory($category, $subCategory)
    {
        // Logic to fetch products based on the subcategory within the category
        $category = Category::where('category_name', $category)->firstOrFail();
        $subcategory = Subcategory::where('sub_category_name', $subCategory)->firstOrFail();
        $products = $subcategory->products;

        // Pass products to the view
        return view('subcategory', compact('category', 'subcategory', 'products'));
    }
}
