<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class student_controller extends Controller
{
    //
    public function student_page(){
        return view('student')->with('page_name', 'Student');
    }
}
