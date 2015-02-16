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

Route::get('show', function()
{
	return View::make('show/');
});
Route::controller('show/project','ProjectController');
Route::controller('show/faculty','FacultyController');
Route::controller('show/faculty/view','FacultyViewController');
Route::controller('show/project/view','ProjectViewController');


