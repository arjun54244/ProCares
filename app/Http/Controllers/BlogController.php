<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::with('comments')->get();
        return view('blog', compact('blogs'));
    }

    public function show(Blog $blog)
    {
        return view('blog-single', compact('blog'));
    }

    public function create()
    {
        return view('blogs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        Blog::create($request->all());
        return redirect()->route('blogs.index');
    }
}
