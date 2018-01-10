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

Route::get('administrator', function () {
    return view('admin.master-admin');
});
Route::get('administrator/category', 'CategoryController@listCategory');
Route::get('administrator/category/add', 'CategoryController@getAddCategory');
Route::post('administrator/category/add', 'CategoryController@postAddCategory');
Route::get('administrator/category/edit/{category}', 'CategoryController@getEditCategory');
Route::put('administrator/category/edit/{category}', 'CategoryController@putEditCategory');
Route::get('administrator/category/delete/{category}', 'CategoryController@deleteCategory');
