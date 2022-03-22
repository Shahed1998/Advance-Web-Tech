<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CourseModel;

class CourseController extends Controller
{
    // Add courses
    public function insertCourse(Request $req){
        try{
            $course = new CourseModel();
            $course->name = $req->courseName;
            $course->d_id = $req->deptID;
            $course->save();
            return response()->json([
                "Status"=>"Success",
                "Data" => [
                    "courseName" => $req->courseName,
                    "deptID" => $req->deptID
                ]
            ],201);

        }catch(\Exception $e){
            return response()->json([
                "Status"=>"Failed",
                "Message"=>"Unable to add data"
            ],403);
        }
    }

    // Get all courses
    public function viewAllCourse(){
        try{

            $courses = CourseModel::orderBy('id')->get();
            return response()->json([
                "Status"=>"Success",
                "data"=>$courses
            ],200);

        }catch(\Exception $e){

            return response()->json([
                "Status"=>"Failed",
                "data"=>null
            ],404);

        }
    }

    // update courses
    public function updateCourse(Request $req, $c_id){
        try{
            if(CourseModel::where('id',$c_id)->first()){
                CourseModel::where('id',$c_id)->update([
                    'name'=>$req->courseName,
                ]);
                return response()->json([
                    "Status"=>"Success",
                    "data"=>["courseName"=>$req->courseName]
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

    // delete courses
    public function deleteCourse(Request $req, $c_id){
        try{
            if(CourseModel::where('id',$c_id)->first()){
                CourseModel::where("id", $c_id)->delete();
                return response()->json('',204);
            }
            
            throw new \ErrorException('Course not found');
            
        }catch(\Exception $e){

            return response()->json([
                "Status"=>"Failed",
                "data"=>$e->getMessage()
            ],400);
        }
    }
}
