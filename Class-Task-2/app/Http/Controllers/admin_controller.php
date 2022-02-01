<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class admin_controller extends Controller
{
    //
    public function admin_page(){
        return view('admin')->with('page_name', 'Admin');
    }
}
