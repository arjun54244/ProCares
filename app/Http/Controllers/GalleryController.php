<?php

namespace App\Http\Controllers;

use App\Models\Gallery;

class GalleryController extends Controller
{
    public function gallery()
    {   
        $galleries = Gallery::latest()->paginate(10);
        return view('gallery', compact('galleries'));
    }
}
