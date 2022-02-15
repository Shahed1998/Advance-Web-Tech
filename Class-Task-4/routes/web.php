<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\studentController;
        

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

// Student routes
Route::get('/students/all', [studentController::class, 'getStudents'])->name('all.students');
Route::get('/students/one/{id}', [studentController::class, 'getOneStudent'])->name('one.student');