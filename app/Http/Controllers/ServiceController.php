<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // add search function 
        $search = $request['search'] ?? "";
        if ($search != "") {
            // Perform a search query and paginate the results
            $services = \App\Models\Service::where('title', 'like', '%' . $search . '%')
                ->orWhere('short_description', 'like', '%' . $search . '%')
                ->paginate(10); // Paginate the results
        } else {
            // Retrieve all services with pagination
            $services = \App\Models\Service::paginate(10);
        }        
        return view('services', compact('services', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug, Request $request)
    {
        $search = $request['search'] ?? "";
        if ($search != "") {
            // Perform a search query and paginate the results
            $services = \App\Models\Service::where('title', 'like', '%' . $search . '%')
                ->orWhere('short_description', 'like', '%' . $search . '%')
                ->paginate(10); // Paginate the results
        }else{
            $service = \App\Models\Service::where('slug', $slug)->firstOrFail();
        }
        return view('service-single', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
