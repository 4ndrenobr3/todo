<?php

use Illuminate\Http\Request;

Route::post('userlogin', 'UserController@userLogin');
Route::post('userregister', 'UserController@userRegister');
Route::group(['middleware' => 'auth:api'], function()
{
    Route::get("tasks", "TasksController@index");
    Route::get('tasks/{task}', 'TasksController@show');
    Route::post("tasks", "TasksController@store");
    Route::patch('tasks/{task}', 'TasksController@update');
    Route::delete('tasks/{task}', 'TasksController@destroy');
});
