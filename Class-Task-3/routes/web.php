<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;

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
Route::get('/', function(){
    return redirect('/product/all');
});
Route::get('/product/all',[productController::class, 'viewAll'])->name('product.all');
Route::get('/product/add', [productController::class, 'addProductGET'])->name('product.add');
Route::post('/product/add', [productController::class, 'addProductPOST'])->name('product.add');
Route::get('/product/{id}', [productController::class, 'viewOne'])->name('product.id');
Route::post('/product/{id}', [productController::class, 'submit'])->name('product.id');