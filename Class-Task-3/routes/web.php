<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\home_controller;
use App\Http\Controllers\login_controller;
use App\Http\Controllers\contacts_controller;
use App\Http\Controllers\student_controller;
use App\Http\Controllers\admin_controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [home_controller::class, 'allCourses']);
Route::get('/login', [login_controller::class, 'loginPage']);
Route::get('/contacts', [contacts_controller::class, 'allContacts']);
Route::get('/dashboard/student', [student_controller::class, 'student_page']);
Route::get('/dashboard/admin', [admin_controller::class, 'admin_page']);