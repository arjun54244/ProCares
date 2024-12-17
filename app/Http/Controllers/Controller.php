<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function gallery()
    {   
        $galleries = \App\Models\Gallery::paginate(10);
        return view('gallery', compact('galleries'));
    }
}
