<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\studentController;
use App\Http\Controllers\departmentController;
        

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

// Course routes
// Route::get('/courses/all', []);

// Student routes
Route::get('/students/all', [studentController::class, 'getStudents'])->name('all.students');
Route::get('/students/one/{id}', [studentController::class, 'getOneStudent'])->name('one.student');

// Department routes
Route::get('/departments/all', [departmentController::class, 'getAll'])->name('all.departments');
Route::get('/departments/one/{id}', [departmentController::class, 'getOne'])->name('one.department');