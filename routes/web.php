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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/tasks',[
	'uses' => 'TaskController@index',
	'as' => 'tasks' 
]);
Route::post('/tasks',[
	'uses' => 'TaskController@store',
	'as' => 'task.add' 
]);
Route::get('/home', 'HomeController@index');
