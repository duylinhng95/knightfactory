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
Route::group(['prefix'=>'adss'], function (){
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
});
