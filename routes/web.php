<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesController@home');
Route::get('/home', 'PagesController@home');

Auth::routes();
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/about', 'PagesController@about');

Route::resource('/projects', 'ProjectsController');

Route::post('/projects/{project}/tasks', 'ProjectTaskController@store');
/*Route::resource('/tasks', 'ProjectTaskController');*/

Route::post('/completed-tasks/{task}', 'CompletedTasksController@store');
Route::delete('/completed-tasks/{task}', 'CompletedTasksController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
