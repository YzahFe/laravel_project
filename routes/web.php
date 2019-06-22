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

Route::get('/', 'ProjectController@index');
Route::get('/create', 'ProjectController@create');
Route::get('/{project}/edit', 'ProjectController@edit');
Route::post('/', 'ProjectController@store');
Route::patch('/{project}', 'ProjectController@update');
Route::delete('/{project}', 'ProjectController@destroy');
