<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/lorem-generator', 'LoremController@create')->name('lorem.create');
Route::post('/lorem-generator', 'LoremController@store')->name('lorem.store');

Route::get('/user-generator', 'UserController@create')->name('user.create');
Route::post('/user-generator', 'UserController@store')->name('user.store');

