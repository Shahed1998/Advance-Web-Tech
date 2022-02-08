<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class login_controller extends Controller
{
    //
   public function loginPage(){
    return view('login')->with('page_name', 'Login');
}
}
