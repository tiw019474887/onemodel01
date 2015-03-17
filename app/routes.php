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
Route::get('Model/view','ModelController@getIndex');

Route::get('faculty','FacultyController@getIndex');
Route::get('faculty/all','FacultyController@getAll');
Route::post('faculty/add','FacultyController@postAdd');
Route::get('faculty/id/{id}','FacultyController@getById');
Route::get('faculty/edit/{id}','FacultyController@getEditForm');
Route::get('faculty/view','ViewFacultyController@getIndex');
Route::get('faculty/view/all','ViewFacultyController@getAll');
Route::post('faculty/view/delete','ViewFacultyController@postDelete');

Route::get('project','ProjectController@getIndex');
Route::get('project/all','ProjectController@getAll');
Route::post('project/add','ProjectController@postAdd');
Route::get('project/view','ViewProjectController@getIndex');
Route::get('project/view/all','ViewProjectController@getAll');
Route::get('project/id/{id}','ProjectController@getById');
Route::get('project/edit/{id}','ProjectController@getEditForm');
Route::post('project/view/delete','ViewProjectController@postDelete');



//ระบบอัตโนมัติให้เอาออก เปลี่ยนเป็นระบบ manual
Route::controller('show/model','ModelController');
//Route::controller('show/project','ProjectController');
Route::controller('show/faculty','FacultyController');
Route::controller('show/facultyview','ViewFacultyController');
//Route::controller('show/projectview','ViewProjectController');
