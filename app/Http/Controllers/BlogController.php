<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function showBlog()
    {
        // Fetch all blog posts
        $blogs = Blog::all();

        return view('blog', compact('blogs'));
    }

    public function showCategory($category)
    {
        // Find the category by its name
        $blogCategory = BlogCategory::where('blog_category_name', $category)->first();

        // Fetch all blog posts under this category
        $blogs = Blog::where('blog_category_id', $blogCategory->id)
                    ->get();

        return view('blog-category', compact('blogs', 'blogCategory'));
    }

    public function showPage($category, $id)
    {
        // Find the blog post by its ID
        $blog = Blog::with('blogCategory')->findOrFail($id);

        return view('blog-page', compact('blog'));
    }
}
