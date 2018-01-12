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
Route::group(['prefix'=>'administrator'], function (){
    Route::get('/',function(){
    	return view('admin.master-admin');
    });
    Route::group(['prefix'=>'speaker'],function(){
    	Route::get('/','SpeakerController@showSpeakers')->name('speaker');
		Route::get('/create','SpeakerController@addSpeaker')->name('create-speaker');
		Route::post('/','SpeakerController@saveSpeaker');
		Route::get('/{speaker}/edit','SpeakerController@editSpeaker');
		Route::put('/{speaker}','SpeakerController@updateSpeaker');
		Route::get('/{speaker}/delete','SpeakerController@deleteSpeaker');
	});
	Route::group(['prefix'=>'category'],function(){
		Route::get('/', 'CategoryController@listCategory');
		Route::get('/add', 'CategoryController@getAddCategory')->name('add-category');
		Route::post('/add', 'CategoryController@postAddCategory')->name('add-category');
		Route::get('/edit/{category}', 'CategoryController@getEditCategory')->name('edit-category');
		Route::put('/edit/{category}', 'CategoryController@putEditCategory')->name('edit-category');
		Route::get('/delete/{category}', 'CategoryController@deleteCategory')->name('delete-category');
        Route::get('/{name}', 'CourseCateController@listCourse');
	});
    Route::group(['prefix'=>'blog'],function(){
        Route::get('list-blogs', 'BlogController@index')->name('list-blogs');
        Route::get('add-blog', 'BlogController@create');
        Route::post('save-blog', 'BlogController@store');
        Route::get('edit-blog/{id}', 'BlogController@edit');
        Route::post('update-blog/{id}', 'BlogController@update');
        Route::get('delete-blog/{id}', 'BlogController@destroy');
    });
    Route::group(['prefix'=>'course'],function(){
        Route::get('/', 'CourseController@index')->name('list-courses');
        Route::get('add-course', 'CourseController@create');
        Route::post('save-course', 'CourseController@store');
        Route::get('edit-course/{id}', 'CourseController@edit');
        Route::post('update-course/{id}', 'CourseController@update');
        Route::get('delete-course/{id}', 'CourseController@destroy');
    });
    Route::group(['prefix'=>'city'],function(){
		Route::get('/', 'CityController@listCity');
		Route::get('/add', 'CityController@getAddCity')->name('add-city');
		Route::post('/add', 'CityController@postAddCity')->name('add-city');
		Route::get('/edit/{city}', 'CityController@getEditCity')->name('edit-city');
		Route::put('/edit/{city}', 'CityController@putEditCity')->name('edit-city');
		Route::get('/delete/{city}', 'CityController@deleteCity')->name('delete-city');
    });
    Route::group(['prefix'=>'class'],function(){
		Route::get('/', 'ClassController@listClass');
		Route::get('/add', 'ClassController@getAddClass')->name('add-class');
		Route::post('/add', 'ClassController@postAddCity')->name('add-class');
		Route::get('/edit/{city}', 'ClassController@getEditCity')->name('edit-class');
		Route::put('/edit/{city}', 'ClassController@putEditCity')->name('edit-class');
		Route::get('/delete/{city}', 'ClassController@deleteCity')->name('delete-class');
	});

});
