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

// Route::resource('/', 'TasksController')->only([
//     'index', 'store', 'destroy'
// ]);

Route::get('/','TasksController@index')->name('index');
//Route::get('/home/{id}', 'TasksController@show')->name('show');
Route::post('/','TasksController@store')->name('store');
Route::delete('/{id}','TasksController@destroy')->name('destroy');

