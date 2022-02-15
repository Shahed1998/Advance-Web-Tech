<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentModel;


class studentController extends Controller
{
    //get home 
    public function getStudents(){

        $allStudents = StudentModel::all();

        return view('allStudents')
        ->with('pageName', 'All students')
        ->with('studentList', $allStudents);
    }

    // get one student
    public function getOneStudent(Request $req){
        $studentID = decrypt($req->id);
        $student = StudentModel::where("id", "=", $studentID)->first();
        return view("studentInfo")
        ->with("pageName", "Student's Info")->with("infos", $student);;
        
    }
}
