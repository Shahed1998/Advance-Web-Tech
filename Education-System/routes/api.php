<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeptController;
use App\Http\Controllers\CourseController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Department routes
Route::get('/dept/all', [DeptController::class, 'viewAllDept']);
Route::get('/dept/{d_id}', [DeptController::class, 'deptDetails']);
Route::post('/dept/add', [DeptController::class, 'insertDept']);
Route::delete('/dept/delete/{d_id}', [DeptController::class, 'deleteDepartment']);
Route::patch('dept/update/{d_id}', [DeptController::class, 'updateDepartment']);

// Course routes
Route::get('/course/all', [CourseController::class, 'viewAllCourse']);
Route::post('/course/add', [CourseController::class, 'insertCourse']);
Route::delete('/course/delete/{c_id}', [CourseController::class, 'deleteCourse']);
Route::patch('/course/update/{c_id}', [CourseController::class, 'updateCourse']);