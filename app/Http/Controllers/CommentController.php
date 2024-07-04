<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request)
    {

        // dd($request->all()); // Check if form data is correctly submitted
        // dd(auth()->user()); // Check if the authenticated user is correctly retrieved
        // Validate the incoming request data
        $validatedData = $request->validate([
            'blog_id' => 'required|exists:blogs,id',
            'content' => 'required|string',
        ]);

        // Get the authenticated user's ID
        $userId = Auth::id();

        // Create and store the comment
        $comment = new Comment();
        $comment->blog_id = $validatedData['blog_id'];
        $comment->content = $validatedData['content'];
        $comment->user_id = $userId;
        $comment->date = now();
        $comment->save();


        // Redirect back with a success message or any other response
        return redirect()->back()->with('success', 'Comment added successfully!');
    }
}
