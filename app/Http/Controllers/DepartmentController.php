<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index(){
       $departmants = \App\Models\Service::all()->where('status', 1)->unique('department');
       return view('department', compact('departmants'));
    }

    public function department(string $department){
        $departmants = \App\Models\Service::all()->where('status', 1)->where('department', $department);
        return view('department', compact('departmants'));
    }
}