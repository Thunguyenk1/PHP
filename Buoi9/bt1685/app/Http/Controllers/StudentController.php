<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function showStudent(Request $request)
    {
        return view ('student-list');
    }
}
