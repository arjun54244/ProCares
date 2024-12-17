<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index (Request $request, int $id){
        $id = $request['id'];
        $doctor = \App\Models\Doctor::where('id', $id)->first();
        return view('doctor-profile', compact('doctor'));
    }
}
