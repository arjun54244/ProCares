<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, Blog $blog)
    {
        $request->validate([
            'blog_id' => 'required',
            'author' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'content' => 'required|string',
        ]);
        
        $blog->comments()->create([
            'blog_id' => '1',
            'author' => $request->author,
            'email' => $request->email,
            'content' => $request->content,
        ]);
        return 'CommentController store is working ' ;

        // return redirect()->route('blogs.show', $blog)->with('success', 'Comment added successfully!');
    }
}
