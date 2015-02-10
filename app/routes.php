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

Route::get('a', function()
{
	return View::make('a/');
});
Route::controller('a/project','ProjectController');
Route::controller('a/faculty','FacultyController');

