<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, Blog $blog)
    {
        $request->validate([
            'author' => 'required',
            'content' => 'required',
        ]);

        $blog->comments()->create($request->all());
        return redirect()->route('blogs.show', $blog);
    }
}
