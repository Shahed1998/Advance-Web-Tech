<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\studentController;
use App\Http\Controllers\departmentController;
use App\Http\Controllers\logoutController;
        

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

// Home routes
Route::get('/', [homeController::class, 'getHome'])->name('home');
Route::post('/', [homeController::class, 'postHome']);

// Course routes
// Route::get('/courses/all', []);

// Student routes
Route::get('/students/all', [studentController::class, 'getStudents'])->name('all.students');
Route::get('/student/info', [studentController::class, 'getOneStudent'])
->middleware("verify.student")
->name('one.student');


// Department routes
Route::get('/departments/all', [departmentController::class, 'getAll'])->name('all.departments');
Route::get('/departments/one/{id}', [departmentController::class, 'getOne'])->name('one.department');

// Logout route
Route::get('/logout', [logoutController::class, 'logout'])->name('logout');