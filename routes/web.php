<?php

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
Route::resource('/projects', 'ProjectController');
Route::resource('/projects/{project}/equipment', 'EquipmentController');
Route::resource('/projects/{project}/category', 'CategoryController');
Route::resource('/projects/{project}/subcategory', 'SubcategoryController');
