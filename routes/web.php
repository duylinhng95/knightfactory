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

Route::get('/', function () {
    return view('welcome');
});
Route::get('administrator', function () {
    return view('admin.master-admin');
});
Route::get('list-blogs', 'BlogController@index')->name('list-blogs');
Route::get('add-blog', 'BlogController@create');
Route::post('save-blog', 'BlogController@store');
Route::get('edit-blog/{id}', 'BlogController@edit');
Route::post('update-blog/{id}', 'BlogController@update');
Route::get('delete-blog/{id}', 'BlogController@destroy');
