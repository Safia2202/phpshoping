<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});
Route::resource('category', 'CategoryController');

// Route::get('/category/create', [App\Http\Controllers\CategoryController::class, 'create'])->name('create');

// Route::get('/category/index', [App\Http\Controllers\CategoryController::class, 'index'])->name('index');

//Route::get('subcatories/{id}', 'ProductController@loadSubCategories');


Route::resource('subcategory', 'SubCategoryController');
