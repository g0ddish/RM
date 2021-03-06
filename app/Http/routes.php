<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::resource('/', 'HomeController');
Route::resource('/login', 'LoginController');
Route::resource('/register', 'RegisterController');
Route::resource('/profile', 'ProfileController');
Route::resource('/projects', 'ProjectController');
Route::resource('/control', 'AdminController');



Route::post('/control/groups', 'AdminController@storeGroup');
Route::post('/control/users', 'AdminController@storeUser');
Route::post('/control/tags', 'AdminController@storeTag');

Route::post('/profile/edit', 'ProfileController@storeUser');



Route::get('/logout', function()
{
    Sentry::logout();
    return Redirect::to('./')->with('message', "Logged out successfully!");
});

Route::get('/applicants', 'ApplicantController@index');
Route::post('/applicants', 'ApplicantController@update');

