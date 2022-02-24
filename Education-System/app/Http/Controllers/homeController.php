<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeModel;

class homeController extends Controller
{
    //return homepage
    public function getHome() {
        return view('home')->with("pageName", "Education System");
    }

    // Login
    public function postHome(Request $req){
        
        $valid = $this->validate($req, [
            'uname'=>'required',
            'upass'=>'required'
        ],[
            'uname.required' => 'Username is required',
            'upass.required'=> 'Password is required'
        ]);

        $user_name = $valid["uname"];
        $password = $valid["upass"];

        $user = HomeModel::where("user_name","=", "$user_name")
        ->where("user_password", "=", "$password")
        ->first();


        if($user){
            $user_id = encrypt($user->id);
            $user_role = $user->user->user_role;
            
            if($user_role == "Student"){
                $req->session()->put("student_id", $user_id);
                return redirect()->route("one.student");
            }
        }

        $req->session()->flash('message', "User not found");
        return redirect()->route("home");

    }
}
