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
        Route::get('/add', 'CityController@getAddCity');
        Route::post('/add', 'CityController@postAddCity');
        Route::get('/edit/{city}', 'CityController@getEditCity');
        Route::put('/edit/{city}', 'CityController@putEditCity');
        Route::get('/delete/{city}', 'CityController@deleteCity');
    });
    Route::group(['prefix'=>'student'],function(){
        Route::get('/','StudentController@listStudents')->name('student');
        Route::get('/create','StudentController@addStudent');
        Route::post('/','StudentController@saveStudent');
        Route::get('/{student}/edit','StudentController@editStudent')->name('edit-student');
        Route::put('/{student}','StudentController@updateStudent');
        Route::get('/{student}','StudentController@detailStudent');
        Route::get('/{student}/delete','StudentController@deleteStudent')->name('delete-student');
    });
});