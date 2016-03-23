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