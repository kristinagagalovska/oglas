<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

//view all advertisements
Route::get('advertisements/view', 'AController@view')->name('advertisements.view');

//add advertisement
Route::get('advertisements/add', 'AController@create')->name('advertisements.add');
Route::post('advertisements/add', 'AController@store')->name('advertisements.add');

//show advertisement
Route::get('advertisements/show/{id}', 'AController@show')->name('advertisements.show');

//edit advertisement
Route::get('advertisements/edit/{id}', 'AController@edit')->name('advertisements.edit');
Route::post('advertisements/edit/{id}', 'AController@update')->name('advertisements.edit');

//delete adverisement
Route::get('advertisements/delete/{id}', 'AController@delete')->name('advertisements.delete');

//search advertisement
Route::get('advertisements/search', 'AController@search1')->name('advertisements.search');

