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

Route::group(['middleware' => 'web'], function(){

  Route::get('/', function () {
      return view('welcome');
  });

  Route::auth();

  Route::get('/home', 'CalendarController@index');

  Route::post('/calendar', 'CalendarController@postShow');

  Route::get('/calendar/{year}/{month}', 'CalendarController@show');

  Route::get('/calendar', 'CalendarController@index');

});

Route::group(['prefix' => 'api/v1', 'middleware' => 'api'], function(){

  Route::post('/auth/signup', 'ApiAuthController@signup');

  Route::post('/auth/login', 'ApiAuthController@login');

  Route::get('/calendar/{year}/{month}', 'ApiController@show');

  Route::get('/calendar/{year}', 'ApiController@year');

  // Route::post('/calendar', 'ApiController@test');

  Route::post('/events', 'ApiEventController@index');

  Route::post('/events/create', 'ApiEventController@store');

  Route::post('/events/update', 'ApiEventController@update');

  Route::post('/events/delete', 'ApiEventController@destroy');

});
