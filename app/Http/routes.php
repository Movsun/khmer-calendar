<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/test', 'TestController@index');
Route::post('/calendar', 'CalendarController@postShow');

Route::get('/calendar/{year}/{month}', 'CalendarController@show');

Route::get('/calendar', 'CalendarController@index');

Route::get('/api/v1/calendar/{year}/{month}', 'ApiController@show');

Route::get('/api/v1/calendar/{year}', 'ApiController@year');

Route::auth();

Route::get('/home', 'HomeController@index');
