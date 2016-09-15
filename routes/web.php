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

Route::group(['middleware' => 'web'], function () {
  Route::get('example', 'ExampleController@getExample');
  Route::post('example', 'ExampleController@postExample');
});

Route::get('/',
  ['as' => 'index', 'uses' => 'AboutController@create']);
Route::post('/',
  ['as' => 'contact_store', 'uses' => 'AboutController@store']);
