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

Blade::setContentTags('<%', '%>'); 		// for variables and all things Blade
Blade::setEscapedContentTags('<%%', '%%>'); 	// for escaped data


Route::get('/', function()
{
    return Redirect::to('show/model');


});
Route::controller('show/model','ModelController');
Route::controller('show/project','ProjectController');
Route::controller('show/faculty','FacultyController');
Route::controller('show/facultyview','ViewFacultyController');
Route::controller('show/projectview','ViewProjectController');
