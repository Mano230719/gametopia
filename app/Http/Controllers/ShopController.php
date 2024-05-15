<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;

class ShopController extends Controller
{
    public function showShop()
    {
        return view('shop');
    }

    public function showCategory($category)
    {
        // Logic to fetch products based on the category
        $category = Category::where('category_name', $category)->firstOrFail();
        $products = $category->products;

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
