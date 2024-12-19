<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index(){
        $show = 1 ;
       $departmants = \App\Models\Service::all()->where('status', 1)->unique('department');
       return view('department', compact('departmants','show'));
    }

    public function department(string $department){
        $show = 0 ;
        $departmants = \App\Models\Service::all()->where('status', 1)->where('department', $department);
        return view('department', compact('departmants', 'show'));
    }
}
