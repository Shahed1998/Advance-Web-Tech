<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\DeptModel;

class DeptController extends Controller
{
    // add department
    public function insertDept(Request $req){
        try{

            $deptName = $req->deptName;
            $department = new DeptModel();
            $department->name = $deptName;
            $department->save();

            return response()->json([
                "Status"=>"Success",
                "data"=>["deptName"=>$deptName]
            ],201);

        }catch(\Exception $e){

            return response()->json([
                "Status"=>"Failed",
                "data"=>null
            ],403);

        }
    }

    // view all departments
    public function viewAllDept(){
        try{

            $departments = DeptModel::orderBy('id')->get();
            return response()->json([
                "Status"=>"Success",
                "data"=>$departments
            ],200);

        }catch(\Exception $e){

            return response()->json([
                "Status"=>"Failed",
                "data"=>null
            ],404);

        }
    }

    // delete a department
    public function deleteDepartment(Request $req, $d_id){
        try{

            if(DeptModel::where('id',$d_id)->first()){
                DeptModel::where("id", $d_id)->delete();
                return response()->json('',204);
            }
            
            throw new \ErrorException('Department not found');
            
        }catch(\Exception $e){

            return response()->json([
                "Status"=>"Failed",
                "data"=>$e->getMessage()
            ],400);

        }
    }

    // update a department
    public function updateDepartment(Request $req, $d_id){
        try{

            if(DeptModel::where('id',$d_id)->first()){
                DeptModel::where('id',$d_id)->update(['name'=>$req->deptName]);
                return response()->json([
                    "Status"=>"Success",
                    "data"=>["deptName"=>$req->deptName]
                ],200);
            }
            
            throw new \ErrorException('Unable to update department');

        }catch(\Exception $e){
            return response()->json([
                "Status"=>"Failed",
                "data"=>$e->getMessage()
            ],400);
        }
    }

    // Department details
    public function deptDetails(Request $req, $d_id){
        try{
            $department = DeptModel::where('id',$d_id)->first();

            if(!$department){
                throw new \ErrorException();
            }

            return response()->json([
                "Status"=>"Success",
                "data"=>[
                    "dID"=>$department->id,
                    "name"=>$department->name,
                    "courses"=>$department->course
                ]
            ]);

        }catch(\Exception $e){

            return response()->json([
                "Status"=>"Failed",
                "data"=>null
            ],404);

        }
    }
    
}
