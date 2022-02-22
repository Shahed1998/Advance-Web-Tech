<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DepartmentModel;

class departmentController extends Controller
{
    // get all departments
    public function getAll(){
        $dept = DepartmentModel::all();
        return view("allDepartments")
        ->with('departments', $dept)
        ->with('pageName', 'All departments');
    }

    // get department info
    public function getOne(Request $req){
        $deptID = decrypt($req->id);
        $deptInfo = DepartmentModel::where("id", "=", $deptID)->first();
        $studentInfo = $deptInfo->students;
        return view("oneDepartment")
        ->with('deptInfo', $deptInfo)
        ->with('studentInfo', $studentInfo);  
    }
}
