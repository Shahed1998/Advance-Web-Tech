<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class home_controller extends Controller
{
    //return all courses
    public function allCourses(){
        $course1 = (object) [
            "Course" => "Programming in python",
            "Instructor" => "Mr. David",
            "Duration" => "4 months",
            "Starts" => "10th February 2022"
        ];
        $course2 = (object) [
            "Course" => "Data science",
            "Instructor" => "Dr. Chuck Severence",
            "Duration" => "6 months",
            "Starts" => "1st February 2022"
        ];
        $course3 = (object) [
            "Course" => "Web Development",
            "Instructor" => "Dr. Alfred",
            "Duration" => "6 months",
            "Starts" => "1st March 2022"
        ];

        $courses = (object) [$course1, $course2, $course3];
        return view('home')->with('courses', $courses)->with('page_name', 'Home');
    }

}
