<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        // Get all blogs with comments
        $blogs = Blog::with('comments')->paginate(10);
        return view('blog', compact('blogs'));
    }

    public function show(Blog $blog)
    {
        $blog->load('comments');
        return view('blog-single', compact('blog'));
    }


    public function create()
    {
        return view('blogs.create');
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'title' => 'required',
        //     'content' => 'required',
        // ]);

        // Blog::create($request->only(['title', 'content']));

        // return redirect()->route('blogs.index')->with('success', 'Blog post created successfully');
        return dd($request->all());
    }
}
