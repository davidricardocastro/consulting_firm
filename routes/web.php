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

/* Laravel original homepage route
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', function () {
    return view('index');
});



/*Route::get('/projects', function () {
    return view('projects');
});*/

Route::get('/projects/project/{id}', 'ProjectController@show')->name('project detail');


//list all projects
Route::get('/projects/list', 'ProjectController@listing');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
