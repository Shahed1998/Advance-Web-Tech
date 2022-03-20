<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeptController;

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

Route::get('/dept/all', [DeptController::class, 'viewAllDept']);
Route::post('/dept/add', [DeptController::class, 'insertDept']);
Route::delete('/dept/delete/{d_id}', [DeptController::class, 'deleteDepartment']);
Route::patch('dept/update/{d_id}', [DeptController::class, 'updateDepartment']);