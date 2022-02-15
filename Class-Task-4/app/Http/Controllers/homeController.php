<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    //return homepage
    public function getHome() {
        return view('home');
    }
}
