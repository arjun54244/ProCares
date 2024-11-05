<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, Blog $blog)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'comment' => 'required',
        ]);

        // Create the comment for the specified blog post
        $blog->comments()->create([
            '' => $request->name,
            'email' => $request->email,
            'comment_text' => $request->comment,
        ]);
        return dd($blog);
        // return redirect()->route('blogs.show', $blog)->with('success', 'Comment added successfully');
    }
}
