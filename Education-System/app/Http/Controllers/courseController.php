<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courses;

class courseController extends Controller
{
    // get all courses
    public function getCourses(){
        // $courses = Courses::all();
        // return view('allCourses')
        // ->with('pageName', 'All courses');
    }

}
